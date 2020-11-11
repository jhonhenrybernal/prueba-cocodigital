<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis planes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:Condensed" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
<style>
    #plan{
  width:945px;
  height:200px;
  background-color:#f6f6f6;
  background: -webkit-linear-gradient(left, #efefef, #e6e6e6);
background: -moz-linear-gradient(left, #efefef, #e6e6e6);
background: -ms-linear-gradient(left, #efefef, #e6e6e6);
background: -o-linear-gradient(left, #efefef, #e6e6e6);
  margin: 0 auto;
margin-top: 30px;



}

.title{
  width:200px;
  height:200px;

  float:left;
   -webkit-transition: background-color 0.3s ease-out 0.3s, width 0.3s ease-out 0.3s;
    -moz-transition:background-color width 0.3s ease-out 0.3s, width 0.3s ease-out 0.3s;
    -o-transition: background-color width 0.3s ease-out 0.3s, width 0.3s ease-out 0.3s;
    transition: background-color width 0.3s ease-out 0.3s, width 0.3s ease-out 0.3s;

}

.title-in {

    background: #206120;
}

.title-out{
    background-color: #a3a3a3;
}


.title h1{

  color:white;
  font-family:'Open Sans';
  text-transform:uppercase;
  font-size:30px;
  font-weight: 100;
  text-align:center;
  margin:0px;
  padding:0px;
  padding-top:35px;
}
.title h1{

  color:white;
  font-family:'Open Sans';
  text-transform:uppercase;
  font-size:30px;
  font-weight: 100;
  text-align:center;
  margin:0px;
  padding:0px;
  padding-top:35px;
}

.title h1 span{
  font-size:10px;
}

.title p{
  color:white;
  font-family:'Open Sans';
  text-transform:uppercase;
  font-size:40px;
  font-weight:bold;
  text-align:center;
  margin:0px;
  padding:0px;

}



.title:hover{
  background-color:#d63240;
  width:230px;
  -webkit-transition: background-color 0.3s ease-out 0.3s, width 0.3s ease-out 0.3s;
    -moz-transition:background-color width 0.3s ease-out 0.3s, width 0.3s ease-out 0.3s;
    -o-transition: background-color width 0.3s ease-out 0.3s, width 0.3s ease-out 0.3s;
    transition: background-color width 0.3s ease-out 0.3s, width 0.3s ease-out 0.3s;
}


.containDetails{
  max-width: 640px;
  float:left;
  margin-top: 29px;
  padding-left: 46px;
}

.details li{
  display:inline-block;
  margin:0px;
  padding:0px;
  font-size: 30px;
  color: #6a6a6a;
  font-family:'Open Sans';
  font-weight:bold;
  text-align: center;
  padding-left: 48px;
}

.first{
  padding:0px!important;
}

.details{
  padding:0px;
  float:left;
}
.details li span{
  font-size:15px;
  text-transform:uppercase;
}

.details li span:before{
 content: '\a' ;
 white-space: pre;
}

.select{
  margin-top: 73px;
  margin-left: 14px;
}
.end{
  width: 150px;
  height: 200px;
  background-color: #efefef;
  float: left;
  position: relative;
  left: 64px;

}

.button-pill {
-webkit-border-radius: 50px;
-moz-border-radius: 50px;
-ms-border-radius: 50px;
-o-border-radius: 50px;
border-radius: 50px;
}

.button {
-webkit-box-shadow: inset 0px 1px 0px rgba(255, 255, 255, 0.5), 0px 1px 2px rgba(0, 0, 0, 0.15);
-moz-box-shadow: inset 0px 1px 0px rgba(255, 255, 255, 0.5), 0px 1px 2px rgba(0, 0, 0, 0.15);
box-shadow: inset 0px 1px 0px rgba(255, 255, 255, 0.5), 0px 1px 2px rgba(0, 0, 0, 0.15);
background-color: #eeeeee;
background: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #fbfbfb), color-stop(100%, #e1e1e1));
background: -webkit-linear-gradient(top, #fbfbfb, #e1e1e1);
background: -moz-linear-gradient(top, #fbfbfb, #e1e1e1);
background: -o-linear-gradient(top, #fbfbfb, #e1e1e1);
background: linear-gradient(top, #fbfbfb, #e1e1e1);
display: -moz-inline-stack;
display: inline-block;
vertical-align: middle;
zoom: 1;
border: 1px solid #d4d4d4;
height: 32px;
line-height: 32px;
padding: 0px 25.6px;
font-weight: 300;
font-size: 14px;
font-family:'Open Sans';
color: #666666;
text-shadow: 0 1px 1px white;
margin: 0;
text-decoration: none;
text-align: center;
}

.button-flat-royal {
-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none;
-webkit-transition-property: background;
-moz-transition-property: background;
-o-transition-property: background;
transition-property: background;
-webkit-transition-duration: 0.3s;
-moz-transition-duration: 0.3s;
-o-transition-duration: 0.3s;
transition-duration: 0.3s;
background: #d63240;
color: white;
text-shadow: none;
border: none;
}
</style>
<div id="plans">

</div>
<script>
    //ver planes
    $(document).ready(function(){
        plans(false)
    });
    //seleccionar plan
    function selectPlan(id){
        $.get("{{url('plans/select/')}}/"+id+"", function(data, status){
            if (data.status) {
                plans(true)
            }
        });
    }

    function plans($status){
        $.get("{{url('plans')}}", function(data, status){
            data.plans.forEach(function(plan, index) {
                if ($status) {
                    $("#plan").remove();
                }
                style = 'title-out'
                txt = 'Adquirir'
                disable = ''
                if (data.actual == plan.id ) {
                    style = 'title-in'
                    txt = 'Plan actual'
                    disable = 'disabled'
                }
                plan = '<div id="plan"><div class="title '+ style+'"><h1>$'+plan.value+' <span>/Archivos</span></h1><p>'+plan.type+'</p></div><div class="containDetails"><ul class="details"><li class="first"><span></span></li><li>'+plan.cant+'<span>Storage</span></li><li> <span></span></li><li><span></span></li></ul></div><div class="end"><div class="select"><div type="button" onclick="selectPlan('+plan.id+')" class="button button-flat-royal button-pill plans-in" '+disable+'>'+txt+'</div></div></div></div>'
                $("#plans").append(plan);
            });
        });
    }
</script>
       </div>
        </div>
    </div>
</x-app-layout>
