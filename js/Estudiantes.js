var app = angular.module('estudiantes', []);
app.controller('est', ['$scope', '$http', function ($scope, $http) {
    $scope.lista = [{ CodEstudiante: "E-0001", Nombre: "Maberiht", Apellido: "Godinez", FechaNacimiento: "26-07-1994", Correo: "johang77@hotmail.com", Sexo: "M", Direccion: "Bo. Milagro de Dios" },
        { CodEstudiante: "E-0002", Nombre: "Feliz", Apellido: "Ramirez", FechaNacimiento: "23-07-1989", Correo: "feliz2012@hotmail.es", Sexo: "M", Direccion: "Bo. Sn Judas" },
        { CodEstudiante: "E-0003", Nombre: "Walter", Apellido: "Vasquez", FechaNacimiento: "10-02-1995", Correo: "walternica@hotmail.com", Sexo: "M", Direccion: "Masaya" },
        { CodEstudiante: "E-0004", Nombre: "Ricardo", Apellido: "Reyes", FechaNacimiento: "27-04-1991", Correo: "ricardoreyes@hotmail.com", Sexo: "M", Direccion: "Sandino City" }
    ];
}]);