<?php 
/**
* OUMAIMA SABI
* DATE:07/03/2022
*/
?>

</main>
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-left">
                        <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">oumaima sabi</a> &copy; <span class="js-year-copy">2022</span>
                    </div>
                </div>
            </footer>
        </div>
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="assets/js/pages/be_pages_dashboard.js"></script>
         <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="assets/js/pages/be_tables_datatables.js"></script>
        
        <script>
            jQuery(function () {
            Codebase.helpers('table-tools');
            });
                $.ajax({
                    url:"http://localhost/projectpfe/projetversion2/data_json/data.chartetat.php",
                    type:"GET",
                    data:'data',
                    success:function(data){
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;

                        var n = [];
                                var e = [];
                        var c=[];
                        for(var count = 0; count <d1; count++)
                                {
                                    n.push(d.data[count].nombre);
                                    e.push(d.data[count].etat);
                                }
                        
                        var ctxt=$("#pieChart").get(0).getContext('2d');
                        var data2={
                        labels : e,
                        datasets : [
                            {
                            label : "etat",
                            data: n,
                            backgroundColor:['#c92b28','#5eb349']
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"doughnut",
                        data: data2,
                        options: { plugins: {legend: {display:false} }},
                        }
                        );
                    },
                });
                $.ajax({
                    url:"http://localhost/projectpfe/projetversion2/data_json/data.chartetat.sepre.php",
                    type:"GET",
                    data:'data',
                    success:function(data){
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;

                        var n = [];
                                var e = [];
                        var c=[];
                        for(var count = 0; count <d1; count++)
                                {
                                    n.push(d.data[count].nombre);
                                    e.push(d.data[count].etat);
                                }
                        
                        var ctxt=$("#pieChartsepre").get(0).getContext('2d');
                        var data2={
                        labels : e,
                        datasets : [
                            {
                            label : "etat",
                            data: n,
                            backgroundColor:['#c92b28','#5eb349']
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"doughnut",
                        data: data2,
                        options: { plugins: {legend: {display:false} }},
                        }
                        );
                    },
                });
                $.ajax({
                    url:"http://localhost/projectpfe/projetversion2/data_json/data.chartetat.stah.php",
                    type:"GET",
                    data:'data',
                    success:function(data){
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;

                        var n = [];
                                var e = [];
                        var c=[];
                        for(var count = 0; count <d1; count++)
                                {
                                    n.push(d.data[count].nombre);
                                    e.push(d.data[count].etat);
                                }
                        
                        var ctxt=$("#pieChartstah").get(0).getContext('2d');
                        var data2={
                        labels : e,
                        datasets : [
                            {
                            label : "etat",
                            data: n,
                            backgroundColor:['#c92b28','#5eb349']
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"doughnut",
                        data: data2,
                        options: { plugins: {legend: {display:false} }},
                        }
                        );
                    },
                });
                $.ajax({
                    url:"http://localhost/projectpfe/projetversion2/data_json/data.chartetat.sqe.php",
                    type:"GET",
                    data:'data',
                    success:function(data){
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;

                        var n = [];
                                var e = [];
                        var c=[];
                        for(var count = 0; count <d1; count++)
                                {
                                    n.push(d.data[count].nombre);
                                    e.push(d.data[count].etat);
                                }
                        
                        var ctxt=$("#pieChartsqe").get(0).getContext('2d');
                        var data2={
                        labels : e,
                        datasets : [
                            {
                            label : "etat",
                            data: n,
                            backgroundColor:['#c92b28','#5eb349']
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"doughnut",
                        data: data2,
                        options: { plugins: {legend: {display:false} }},
                        }
                        );
                    },
                });
                $.ajax({
                    url:"http://localhost/projectpfe/projetversion2/data_json/data.chartetat.sgdph.php",
                    type:"GET",
                    data:'data',
                    success:function(data){
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;

                        var n = [];
                                var e = [];
                        var c=[];
                        for(var count = 0; count <d1; count++)
                                {
                                    n.push(d.data[count].nombre);
                                    e.push(d.data[count].etat);
                                }
                        
                        var ctxt=$("#pieChartsgdph").get(0).getContext('2d');
                        var data2={
                        labels : e,
                        datasets : [
                            {
                            label : "etat",
                            data: n,
                            backgroundColor:['#c92b28','#5eb349']
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"doughnut",
                        data: data2,
                        options: { plugins: {legend: {display:false} }},
                        }
                        );
                    },
                });

                $.ajax({
                    url:"http://localhost/projectpfe/projetversion2/data_json/data.chart.number.php",
                    type:"GET",
                    data:'data',
                    success:function(data){
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;

                        var n = [];
                        var e = [];
                        var c=[];
                        for(var count = 0; count <d1; count++)
                                {
                                    console.log(n.push(d.data[count].nombre));
                                    e.push(d.data[count].description);
                                    c.push(d.data[count].color);
                                }
                        
                        var ctxt=$("#piechart2").get(0).getContext('2d');
                        var data3={
                        labels : e,
                        datasets : [
                            {
                            label : "durée",
                            data: n,
                            backgroundColor:['#5eb349','#bda344','#c92b28'],
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"pie",
                        data: data3,
                        options: { plugins: {legend: {display:false} }},
                        }
                        );
                    },
                });
                $.ajax({
                    url:"http://localhost/projectpfe/projetversion2/data_json/data.chart.number.sepre.php",
                    type:"GET",
                    data:'data',
                    success:function(data){
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;

                        var n = [];
                        var e = [];
                        var c=[];
                        for(var count = 0; count <d1; count++)
                                {
                                    console.log(n.push(d.data[count].nombre));
                                    e.push(d.data[count].description);
                                    c.push(d.data[count].color);
                                }
                        
                        var ctxt=$("#piechart2sepre").get(0).getContext('2d');
                        var data3={
                        labels : e,
                        datasets : [
                            {
                            label : "durée",
                            data: n,
                            backgroundColor:['#5eb349','#bda344','#c92b28'],
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"pie",
                        data: data3,
                        options: { plugins: {legend: {display:false} }},
                        }
                        );
                    },
                });
                $.ajax({
                    url:"http://localhost/projectpfe/projetversion2/data_json/data.chart.number.stah.php",
                    type:"GET",
                    data:'data',
                    success:function(data){
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;

                        var n = [];
                        var e = [];
                        var c=[];
                        for(var count = 0; count <d1; count++)
                                {
                                    console.log(n.push(d.data[count].nombre));
                                    e.push(d.data[count].description);
                                    c.push(d.data[count].color);
                                }
                        
                        var ctxt=$("#piechart2stah").get(0).getContext('2d');
                        var data3={
                        labels : e,
                        datasets : [
                            {
                            label : "durée",
                            data: n,
                            backgroundColor:['#5eb349','#bda344','#c92b28'],
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"pie",
                        data: data3,
                        options: { plugins: {legend: {display:false} }},
                        }
                        );
                    },
                });
                $.ajax({
                    url:"http://localhost/projectpfe/projetversion2/data_json/data.chart.number.sgdph.php",
                    type:"GET",
                    data:'data',
                    success:function(data){
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;

                        var n = [];
                        var e = [];
                        var c=[];
                        for(var count = 0; count <d1; count++)
                                {
                                    console.log(n.push(d.data[count].nombre));
                                    e.push(d.data[count].description);
                                    c.push(d.data[count].color);
                                }
                        
                        var ctxt=$("#piechart2sgdph").get(0).getContext('2d');
                        var data3={
                        labels : e,
                        datasets : [
                            {
                            label : "durée",
                            data: n,
                            backgroundColor:c,
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"pie",
                        data: data3,
                        options: { plugins: {legend: {display:false} }},
                        }
                        );
                    },
                });
                $.ajax({
                    url:"http://localhost/projectpfe/projetversion2/data_json/data.chart.number.sqe.php",
                    type:"GET",
                    data:'data',
                    success:function(data){
                        var d =JSON.parse(data);
                        var d1= Object.keys(d.data).length;

                        var n = [];
                        var e = [];
                        var c=[];
                        for(var count = 0; count <d1; count++)
                                {
                                    console.log(n.push(d.data[count].nombre));
                                    e.push(d.data[count].description);
                                    c.push(d.data[count].color);
                                }
                        
                        var ctxt=$("#piechart2sqe").get(0).getContext('2d');
                        var data3={
                        labels : e,
                        datasets : [
                            {
                            label : "durée",
                            data: n,
                            backgroundColor:['#5eb349','#bda344','#c92b28'],
                            }

                        ]
                        }

                        var chart1= new Chart ( ctxt , {
                        type:"pie",
                        data: data3,
                        options: { plugins: {legend: {display:false} }},
                        }
                        );
                    },
                });


           

</script>
<script src="assets/js/map/scriptforoneproject.js"></script>
    
