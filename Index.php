<!DOCTYPE html>
<html>
<head>
    <title>Edu</title>
    <link rel="stylesheet" href="css/material.min.css" />
    <link href="css/fuente.css" rel="stylesheet" />
    <link href="css/Styls.css" rel="stylesheet" />
</head>
<body data-ng-app="estudiantes">
    <div class="demo-layout-waterfall mdl-layout mdl-js-layout">
        <header class="mdl-layout__header mdl-layout__header--waterfall">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">EduPort</span>
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon"
                           for="waterfall-exp">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample"
                               id="waterfall-exp">
                    </div>
                </div>
            </div>
            <div class="mdl-layout__header-row">
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">Estudiantes</a>
                    <a class="mdl-navigation__link" href="">Turnos</a>
                    <a class="mdl-navigation__link" href="">Grados</a>
                    <a class="mdl-navigation__link" href="">Otros</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Edu</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Estudiantes</a>
                <a class="mdl-navigation__link" href="">Turnos</a>
                <a class="mdl-navigation__link" href="">Grados</a>
                <a class="mdl-navigation__link" href="">Otros</a>
            </nav>
        </div>
        <div class="mdl-layout__content">
            <div class="demo-card-square mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col mdl-cell--3-offset">
                <div class="mdl-card__title mdl-card--expand">
                    <h2 class="mdl-card__title-text">Estudiantes</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <form action="#">
                        <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--6-col">
                            <input class="mdl-textfield__input" type="text" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Cod. Estudiante</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--6-col">
                            <input class="mdl-textfield__input" type="text" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Nombre</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--6-col">
                            <input class="mdl-textfield__input" type="text" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Apellido</label>
                        </div>


                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--6-col">
                            <input class="mdl-textfield__input" type="text" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Fecha Nacimiento</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-cell--6-col">
                            <input class="mdl-textfield__input" type="text" id="sample3">
                            <label class="mdl-textfield__label" for="sample3">Correo</label>
                        </div>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect mdl-cell mdl-cell--3-col" for="option-1">
                            <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                            <span class="mdl-radio__label">Masculino</span>
                        </label>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect mdl-cell mdl-cell--3-col" for="option-2">
                            <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                            <span class="mdl-radio__label">Femenino</span>
                        </label>
                        <div class="mdl-textfield mdl-js-textfield mdl-cell--12-col">
                            <textarea class="mdl-textfield__input" type="text" rows="3" id="sample5"></textarea>
                            <label class="mdl-textfield__label" for="sample5">Direccion</label>
                        </div>
                    </form>
                </div>
                <div class="mdl-card__actions">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                        Guardar
                    </a>
                </div>
            </div>
            <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp mdl-cell mdl-cell--8-col mdl-cell--2-offset" data-ng-controller="est">
                <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric">Cod.</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Sexo</th>
                        <th>Correo</th>
                        <th>Direccion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-ng-repeat="e in lista">
                        <td class="mdl-data-table__cell--non-numeric">{{ e.CodEstudiante }}</td>
                        <td>{{ e.Nombre }}</td>
                        <td>{{ e.Apellido }}</td>
                        <td>{{ e.Sexo }}</td>
                        <td>{{ e.Correo }}</td>
                        <td>{{ e.Direccion }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <span class="mdl-layout-title">Edu</span>
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield__expandable-holder">
                    <input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
                </div>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title"></span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
                    Button
                </button>
            </div>
        </main>
    </div>-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/Estudiantes.js"></script>
    <script src="js/material.min.js"></script>
    <script src="js/smoke.min.js"></script>
</body>
</html>