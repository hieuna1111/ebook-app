@extends('layouts.admin')

@section('title')
  Admin | Revenue Chart
@endsection

@section('content')

  <div class="container-fluid">
    <div class="page-titles">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">Charts</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Chartist</a></li>
      </ol>
    </div>
    <!-- row -->

    <div class="row">
      <div class="col-12">
        <div class="row">

          <div class="col-xl-6 col-lg-12">
            <div class="card">
                <iframe style="background: #FFFFFF;border: none;border-radius: 2px;box-shadow: 0 2px 10px 0 rgba(70, 76, 79, .2);"
                        width="640" height="480"
                        src="https://charts.mongodb.com/charts-project-0-pzxse/embed/charts?id=62f8ba62-0e3a-44cf-8fd0-d546ae43cc02&maxDataAge=3600&theme=light&autoRefresh=true">
                </iframe>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

@endsection

<script src="/assets/vendor/global/global.min.js" type="text/javascript"></script>
<script src="/assets/vendor/chartist/js/chartist.min.js" type="text/javascript"></script>
<script src="/assets/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
{{--<script src="/assets/js/plugins-init/chartist-init.js" type="text/javascript"></script>--}}

<script>


</script>

<script>
  (function($) {
    /* "use strict" */

    const orders = @json($data);
    const result = [];
    (orders).forEach((x, i) => {
      var products = x.products;
      products.forEach((p, i) => {
        result.push(parseFloat(p.price.$numberDecimal));
      })
    });
    console.log(result);

    var dzChartlist = function(){

      var withAreaChart = function(){
        //Line chart with area

        new Chartist.Line('#chart-with-area', {
          labels: ["Mon", "Tue", "Wed", "Apr", "Thu", "Fri", "Sat", "Sun"],
          series: [
            [100 , 400, 300, 1000]
          ]
        }, {
          low: 0,
          showArea: true,
          fullWidth: true,
          plugins: [
            Chartist.plugins.tooltip()
          ]
        });

      }

      /* Function ============ */
      return {
        init:function(){
        },

        load:function(){
          withAreaChart();
        },

        resize:function(){
          withAreaChart();
        }
      }

    }();

    jQuery(document).ready(function(){
    });

    jQuery(window).on('load',function(){
      dzChartlist.load();
    });

    jQuery(window).on('resize',function(){
      dzChartlist.resize();
    });

  })(jQuery);

</script>

{{--<script src="https://tixia.dexignzone.com/laravel/demo/vendor/bootstrap-datetimepicker/js/moment.js" type="text/javascript"></script>--}}
{{--<script src="https://tixia.dexignzone.com/laravel/demo/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>--}}
{{--<script src="https://tixia.dexignzone.com/laravel/demo/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>--}}
{{--<script src="https://tixia.dexignzone.com/laravel/demo/js/custom.min.js" type="text/javascript"></script>--}}
{{--<script src="https://tixia.dexignzone.com/laravel/demo/js/deznav-init.js" type="text/javascript"></script>--}}
{{--<script src="https://tixia.dexignzone.com/laravel/demo/js/demo.js" type="text/javascript"></script>--}}
{{--<script src="https://tixia.dexignzone.com/laravel/demo/js/styleSwitcher.js" type="text/javascript"></script>--}}

{{--<script id="DZScript" src="https://dzassets.s3.amazonaws.com/w3-global.js?btn_dir=right"></script>--}}

