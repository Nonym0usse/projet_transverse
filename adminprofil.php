<?php
require_once("inc/init.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(!internauteEstConnecte())
{
    header("location:connexion.php");
}


//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("inc/adminhaut.inc.php");
echo $contenu;
?>

        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary" style="padding-top:15px">
                        <div class="box-body">

                            <div ng-controller="SummaryTableController" class="ng-scope">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="input-group col-md-5">
                                            <input type="text" class="form-control ng-pristine ng-untouched ng-valid" placeholder="" ng-model="searchTerm" ng-keyup="$event.keyCode == 13 ? filterColumns () : null">
                                            <span class="input-group-btn">
                  <button class="btn btn-default" type="button" ng-click="filterColumns()" ng-disabled="searchTerm == ''" disabled="disabled">Search</button>
              </span>
                                        </div>
                                    </div><!-- /input-group -->
                                    <div class="col-md-3">
                                        <div class="pull-right">
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ng-hide" ng-show="selectedCount > 0 &amp;&amp; isWritable ()">
                                    <div class="col-md-12 ng-binding">
                                        With 0 Rows: <confirm-button label="Delete" activate="deleteRows ()" ck-class="btn-danger">
                                        </confirm-button></div>
                                </div>
                                <div cg-busy="loadingPromise" style="position: relative;">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th style="width: 30px">
                                                <input type="checkbox" ng-change="selectAll ()" ng-model="allSelectedFlag" class="table-checkbox ng-pristine ng-untouched ng-valid">
                                            </th>
                                            <!-- ngRepeat: col in columns --><th class="lib-name">
                                                IP Address
                                            </th>
                                            <th class="lib-tag">
                                                Country
                                            </th>
                                            <th class="lib-add">
                                                View Details
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <!-- ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=1&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=1&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        Brazil
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                            <td>
                                                <a href="#" class="btn btn-success"><i class="fa fa-plus-circle"></i> View</a>
                                            </td>
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=8&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=8&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        Belgium
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=9&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=9&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        Denmark
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=10&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=10&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        Brazil
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=11&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=11&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        Brazil
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=12&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=12&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        Brazil
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=13&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=13&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        Brazil
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=14&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=14&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        Canada
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=15&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=15&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        Canada
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=16&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=16&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        USA
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=17&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=17&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        USA
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=18&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=18&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        USA
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=19&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=19&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        USA
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=20&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=20&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        USA
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=21&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=21&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        USA
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=22&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=22&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        USA
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=23&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=23&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        USA
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=24&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=24&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        USA
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=25&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=25&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        USA
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows --><tr ng-repeat="row in rows" ng-class="{'info': row.selectedFlag}" class="ng-scope">
                                            <td>
                                                <input ng-model="row.selectedFlag" type="checkbox" class="table-checkbox ng-pristine ng-untouched ng-valid" ng-change="updateSelectedCount ()">
                                            </td>
                                            <!-- ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink --><div ng-switch-when="primaryLink" class="ng-scope">
                                                        <a ng-href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=26&amp;page=sqlite2" class="ng-binding" href="http://crudkit.com/demo/?action=page_function&amp;func=view_item&amp;item_id=26&amp;page=sqlite2">192.168.0.1</a>
                                                    </div><!-- end ngSwitchWhen: -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns --><td ng-repeat="col in columns" class="ng-scope">
                                                <div ng-switch="" on="col.renderType">
                                                    <!-- ngSwitchWhen: string --><div ng-switch-when="string" class="ng-binding ng-scope">
                                                        USA
                                                    </div><!-- end ngSwitchWhen: -->
                                                    <!-- ngSwitchWhen: number -->
                                                    <!-- ngSwitchWhen: datetime -->
                                                    <!-- ngSwitchWhen: primaryLink -->
                                                </div>
                                            </td><!-- end ngRepeat: col in columns -->
                                        </tr><!-- end ngRepeat: row in rows -->
                                        </tbody>
                                    </table>
                                    <ul class="pagination ng-isolate-scope ng-valid" total-items="rowCount" ng-model="currentPage" items-per-page="10" max-size="10" rotate="false" boundary-links="false" ng-change="pageChanged()">
                                        <!-- ngIf: boundaryLinks -->
                                        <!-- ngIf: directionLinks --><li ng-if="directionLinks" ng-class="{disabled: noPrevious()}" class="ng-scope disabled"><a href="" ng-click="selectPage(page - 1, $event)" class="ng-binding">Previous</a></li><!-- end ngIf: directionLinks -->
                                        <!-- ngRepeat: page in pages track by $index --><li ng-repeat="page in pages track by $index" ng-class="{active: page.active}" class="ng-scope active"><a href="" ng-click="selectPage(page.number, $event)" class="ng-binding">1</a></li><!-- end ngRepeat: page in pages track by $index --><li ng-repeat="page in pages track by $index" ng-class="{active: page.active}" class="ng-scope"><a href="" ng-click="selectPage(page.number, $event)" class="ng-binding">2</a></li><!-- end ngRepeat: page in pages track by $index --><li ng-repeat="page in pages track by $index" ng-class="{active: page.active}" class="ng-scope"><a href="" ng-click="selectPage(page.number, $event)" class="ng-binding">3</a></li><!-- end ngRepeat: page in pages track by $index --><li ng-repeat="page in pages track by $index" ng-class="{active: page.active}" class="ng-scope"><a href="" ng-click="selectPage(page.number, $event)" class="ng-binding">4</a></li><!-- end ngRepeat: page in pages track by $index --><li ng-repeat="page in pages track by $index" ng-class="{active: page.active}" class="ng-scope"><a href="" ng-click="selectPage(page.number, $event)" class="ng-binding">5</a></li><!-- end ngRepeat: page in pages track by $index --><li ng-repeat="page in pages track by $index" ng-class="{active: page.active}" class="ng-scope"><a href="" ng-click="selectPage(page.number, $event)" class="ng-binding">6</a></li><!-- end ngRepeat: page in pages track by $index -->
                                        <!-- ngIf: directionLinks --><li ng-if="directionLinks" ng-class="{disabled: noNext()}" class="ng-scope"><a href="" ng-click="selectPage(page + 1, $event)" class="ng-binding">Next</a></li><!-- end ngIf: directionLinks -->
                                        <!-- ngIf: boundaryLinks -->
                                    </ul>


                                    <div class="cg-busy cg-busy-backdrop cg-busy-backdrop-animation ng-scope ng-hide" ng-show="$cgBusyIsActive()"></div><div class="cg-busy cg-busy-animation ng-scope ng-hide" ng-show="$cgBusyIsActive()"><div class="cg-busy-default-wrapper" style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px;">

                                            <div class="cg-busy-default-sign">

                                                <div class="cg-busy-default-spinner">
                                                    <div class="bar1"></div>
                                                    <div class="bar2"></div>
                                                    <div class="bar3"></div>
                                                    <div class="bar4"></div>
                                                    <div class="bar5"></div>
                                                    <div class="bar6"></div>
                                                    <div class="bar7"></div>
                                                    <div class="bar8"></div>
                                                    <div class="bar9"></div>
                                                    <div class="bar10"></div>
                                                    <div class="bar11"></div>
                                                    <div class="bar12"></div>
                                                </div>

                                            </div>

                                        </div></div></div>
                            </div>
                            <script type="text/javascript">
                                window.pageId = "sqlite2";
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </section>
