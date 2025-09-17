<?php
if(!empty($_SESSION['error'])){
                    foreach($_SESSION['error'] as $er){
                        echo '<font color="red">'.$er.'</font><br />';
                    }
                    unset($_SESSION['error']);
                }

            ?>