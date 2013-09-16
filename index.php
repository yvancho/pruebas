<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <link rel="stylesheet" type="text/css" href='css/bootstrap.min.css'/>
        <link rel="stylesheet" type="text/css" href='css/styles.css'/>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>

        <title><?php echo 'INDICE' ?></title>

        <script type="text/javascript">
            $(document).ready(function() {
//                $("#myModal").modal('show');
//                setTimeout(function() {
//                    $("#myModal").modal('hide');
//                }, 3000);

                //manualmente
                $("#linkModal").click(function() {
                    event.preventDefault();
                    $("#myModal").modal('show');
                    setTimeout(function() {
                        $("#myModal").modal('hide');
                    }, 3000);
                });
            });
        </script>
    </head>
    <body>
        <!-- Button to trigger modal -->
        <!--<a href="#myModal" role="button" class="btn" data-toggle="modal">Lanza demo modal</a>-->
        <a href="#myModal" role="button" class="btn" id="linkModal" >Lanza demo modal</a>
        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Modal header</h3>
            </div>

            <div class="modal-body">
                <p>One fine body…</p>
                <div id="circularG">
                    <div id="circularG_1" class="circularG">
                    </div>
                    <div id="circularG_2" class="circularG">
                    </div>
                    <div id="circularG_3" class="circularG">
                    </div>
                    <div id="circularG_4" class="circularG">
                    </div>
                    <div id="circularG_5" class="circularG">
                    </div>
                    <div id="circularG_6" class="circularG">
                    </div>
                    <div id="circularG_7" class="circularG">
                    </div>
                    <div id="circularG_8" class="circularG">
                    </div>
                </div>



            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <!--<button class="btn btn-primary">Save changes</button>-->
            </div>
            <div id="pagina"></div>
        </div>

    </body>

</html>
