<?php
/**
 * Created by PhpStorm.
 * User: manhd
 * Date: 28/03/2016
 * Time: 10:47 PM
 */

namespace backend\assets;
use yii\web\AssetBundle;

class MetroAsset extends AssetBundle
{
    public $basePath = '@webroot/resources';
    public $baseUrl = '@web/resources';

    public $css = [
        'global/plugins/font-awesome/css/font-awesome.min.css',
        'global/plugins/simple-line-icons/simple-line-icons.min.css',
        'global/plugins/bootstrap/css/bootstrap.min.css',
        'global/plugins/uniform/css/uniform.default.css',
        'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'global/plugins/bootstrap-daterangepicker/daterangepicker.min.css',
        'global/plugins/morris/morris.css',
        'global/plugins/fullcalendar/fullcalendar.min.css',
        'global/plugins/jqvmap/jqvmap/jqvmap.css',
        'global/css/components.min.css',
        'global/css/plugins-md.min.css',
        'global/plugins/icheck/skins/all.css',
        'layouts/layout4/css/themes/light.min.css',
        'layouts/layout4/css/custom.min.css',
        'layouts/layout4/css/layout.min.css',
    ];
    public $js = [
        //'global/plugins/jquery.min.js',
        'global/plugins/bootstrap/js/bootstrap.min.js',
        'global/plugins/js.cookie.min.js',
        'global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'global/plugins/jquery.blockui.min.js',
        'global/plugins/uniform/jquery.uniform.min.js',
        'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'global/plugins/moment.min.js',
        'global/plugins/bootstrap-daterangepicker/daterangepicker.min.js',
        'global/plugins/morris/morris.min.js',
        'global/plugins/morris/raphael-min.js',
        'global/plugins/counterup/jquery.waypoints.min.js',
        'global/plugins/counterup/jquery.counterup.min.js',
        'global/plugins/amcharts/amcharts/amcharts.js',
        'global/plugins/amcharts/amcharts/serial.js',
        'global/plugins/amcharts/amcharts/pie.js',
        'global/plugins/amcharts/amcharts/radar.js',
        'global/plugins/amcharts/amcharts/themes/light.js',
        'global/plugins/amcharts/amcharts/themes/patterns.js',
        'global/plugins/amcharts/amcharts/themes/chalk.js',
        'global/plugins/amcharts/ammap/ammap.js',
        'global/plugins/amcharts/ammap/maps/js/worldLow.js',
        'global/plugins/amcharts/amstockcharts/amstock.js',
        'global/plugins/fullcalendar/fullcalendar.min.js',
        'global/plugins/flot/jquery.flot.min.js',
        'global/plugins/flot/jquery.flot.resize.min.js',
        'global/plugins/flot/jquery.flot.categories.min.js',
        'global/plugins/jquery-easypiechart/jquery.easypiechart.min.js',
        'global/plugins/jquery.sparkline.min.js',
        'global/plugins/jqvmap/jqvmap/jquery.vmap.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js',
        'global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js',
        'global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',
        'global/plugins/icheck/icheck.min.js',
        'pages/scripts/form-icheck.min.js',
        'global/scripts/app.min.js',
        'pages/scripts/dashboard.min.js',
        'layouts/layout4/scripts/layout.min.js',
        'layouts/layout4/scripts/demo.min.js',
        'layouts/global/scripts/quick-sidebar.min.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}