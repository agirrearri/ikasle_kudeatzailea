
var miAplicacion = angular.module('miAplicacion', []);

miAplicacion.controller('mainController', function ($scope, $http) {

    //para rellenar la tabla de alumnos
    $http.get('getAlumnos.php').success(function (data) {
        if (data === "nok") {
            alert("fuera de aqui");
           // window.location.href ="http://www.google.com";
        } else {
            $scope.lista = data;
        }
    });


    //para pintar el select de ciclos
    $http.get('getCiclos.php')
            .then(function (response) {

                $scope.ListaCiclos = response.data;

                console.log("status:" + response.status);
            }).catch(function (response) {
        console.error('Error occurred:', response.status, response.data);
    }).finally(function () {
        console.log("Task Finished.");
    });

    $scope.misdatos = {
        id: "",
        nombre: "",
        apellido1: "",
        apellido2: "",
        ciclo: "",
        curso: ""
    }

    $scope.agregaralumno = 'false';
    $scope.respuesta = "";
    $scope.datosalta = [];
    $scope.Iniciaragregar = function () {
        $scope.agregaralumno = 'true';
        longitud = Object.keys($scope.lista).length;
        longitud = longitud - 1;
        $scope.miid = $scope.lista[longitud].id;
        //alert($scope.miid);
        $scope.miid++;
        $scope.misdatos.id = $scope.miid;
    }


    $scope.agregar = function () {

        $scope.misdatos.id = $scope.miid;

        $scope.lista.push({id: $scope.misdatos.id, nombre: $scope.misdatos.nombre, apellido1: $scope.misdatos.apellido1, apellido2: $scope.misdatos.apellido2, ciclo: $scope.cicloSeleccionado.titulo, curso: $scope.misdatos.curso, seleccionado: 'false'});

        var datosalta = JSON.stringify($scope.misdatos);

        // el insert de los alumnos en la BBDD
        var xsrf = $.param({alumno: datosalta});
        $http({
            method: 'POST',
            url: 'addAlumno.php',
            data: xsrf,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function successCallback(response) {
            console.log(response);
            alert(response.data);

        }, function errorCallback(response) {
            alert("error")
        });


        $scope.datosalta = [];



        $scope.misdatos.id++;
        $scope.miid++;
        $scope.misdatos.nombre = '';
        $scope.misdatos.apellido1 = '';
        $scope.misdatos.apellido2 = '';
        $scope.misdatos.ciclo = '';
        $scope.misdatos.curso = '';
        $scope.misdatos.seleccionado = 'false';
        $scope.agregaralumno = 'false';
    };


    $scope.cancelar = function () {
        $scope.misdatos.id = $scope.miid;
        $scope.misdatos.nombre = '';
        $scope.misdatos.apellido1 = '';
        $scope.misdatos.apellido2 = '';
        $scope.misdatos.ciclo = '';
        $scope.misdatos.curso = '';
        $scope.agregaralumno = 'false';
    };


    $scope.Eliminarlista = function () {
        $scope.lista = [];
        //se puede elimnar de la BBDD enaut
//        $http.get('deleteAlumnos.php').success(function (data) {
//            alert("alumnos eliminados");
//        });
    };

    $scope.Eliminaralumno = function () {
        var milista = $scope.lista;
        $scope.lista = [];

        angular.forEach(milista, function (item)
        {

            if (item.seleccionado === 'false') {
                $scope.lista.push(item);
                alert(item.nombre);
            }

        });


        longitud = Object.keys($scope.lista).length;
        longitud = longitud - 1;
        $scope.miid = $scope.lista[longitud].id;
        $scope.miid++;
        alert($scope.miid);



    };
//      
    //codigo de busqueda se busca por cualqueira de las caract. Proemro se da al boton
    //iniciar busqueda para ver los campos de busqueda y luego se filtra
    $scope.iniciarbusqueda = false;
    $scope.Buscar = function () {
        $scope.iniciarbusqueda = true;

    }
    $scope.finbuscar = function () {
        $scope.busqueda = "";
        $scope.iniciarbusqueda = false;
    }
    $scope.Guardar = function () {


        // actualizar la bd
        var lista = JSON.stringify($scope.lista);
        // $scope.jsonmidata = [];
        $http({url: "EJERCICIOBD_2.php",
            method: "GET",
            params: {value: lista}
        }).success(function (response) {
            $scope.lista = response;
            alert("la base de datos se ha actualizado correctamente")
        }).error(function () {
            console.error('Error occurred:', response.status, response.data);
        });
    };








});  