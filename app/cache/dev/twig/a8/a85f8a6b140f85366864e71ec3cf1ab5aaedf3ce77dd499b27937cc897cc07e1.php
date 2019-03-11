<?php

/* EspritDemandeBundle:Forum:reclamationAdmin.html.twig */
class __TwigTemplate_dd6ff88be7ffd0a995c23ff8613963f33555d4b1cc7d0ad7e3c579d59556f619 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Admin All For Deal | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/morris/morris.css"), "html", null, true);
        echo "\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body class=\"hold-transition skin-blue sidebar-mini\">
    <div class=\"wrapper\">

      <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("acceuil2_demande");
        echo "\" class=\"logo\">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class=\"logo-mini\"><b>A</b>LT</span> 
          <!-- logo for regular state and mobile devices -->
          <span class=\"logo-lg\"><b>Admin</b><span class=\"highlight\" style=\"color:red\"> A</span>ll<span class=\"highlight\" style=\"color:red\">F</span>or<span class=\"highlight\" style=\"color:red\">D</span>eal</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
                
             
           
              <!-- User Account: style can be found in dropdown.less -->
              <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
                  <span class=\"hidden-xs\">rootWalid</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">
                    <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
                    <p>
                      rootWalid
                      <small>Admin All For Deal</small>
                    </p>
                  </li>
                  
                  <!-- Menu Body -->
                 <!-- <li class=\"user-body\">
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Followers</a>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Sales</a>
                    </div>
                    <div class=\"col-xs-4 text-center\">
                      <a href=\"#\">Friends</a>
                    </div>
                  </li>!-->
                 
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                 <a href=\"";
        // line 94
        echo "\" class=\"btn btn-default btn-flat\">Profile</a>                  
                         ";
        // line 98
        echo "                    </div>
                    <div class=\"pull-right\">
                      <a href=\"";
        // line 100
        echo "\" class=\"btn btn-default btn-flat\">Sign out</a>
                    </div> 
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href=\"#\" data-toggle=\"control-sidebar\"><i class=\"fa fa-gears\"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <!-- Sidebar user panel -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
              <p>rootWalid</p>
              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div> 
          <!-- search form -->
          
          
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
                <li class=\"current_page\"><a href=\"";
        // line 135
        echo "\">Home</a></li>
            <li class=\"active treeview\">
              <a href=\"#\">
                <i class=\"fa fa-dashboard\"></i> <span>Gestion Des Utilisateurs</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li class=\"active\"><a href=\"";
        // line 141
        echo "\"><i class=\"fa fa-circle-o\"></i>Utilisateurs Inscrits</a></li>
                <li><a href=\"";
        // line 142
        echo "\"><i class=\"fa fa-circle-o\"></i>Reglages Utilisateurs</a></li>
\t\t<li><a href=\"";
        // line 143
        echo "\"><i class=\"fa fa-circle-o\"></i>Liste Des Utilisateurs Bloques</a></li>
              </ul>
            </li>
            
         
            
            
            
            
            
            
            
         <li class=\"treeview\">
              <a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("liste_demande_a_traiter");
        echo "\">
                <i class=\"fa fa-edit\"></i> <span>Gestion des Services</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              
            </li>
            
            <li class=\"treeview\">
              <a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("traitement_reclamation");
        echo "\">
                <i class=\"fa fa-table\"></i> <span>Gestion des Reclamations</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              
            </li>
            
            <li class=\"treeview\">
              <a href=\"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("traitement_forum");
        echo "\">
                <i class=\"fa fa-table\"></i> <span>Gestion de Forum</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
             
            </li>
            
            
            
            
            
           
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          
          
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <!-- Small boxes (Stat box) -->
          <div class=\"row\">
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
             
            </div><!-- ./col -->
            
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              
            </div><!-- ./col -->
            <div class=\"col-lg-3 col-xs-6\">
              <!-- small box -->
              
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class=\"row\">
            <!-- Left col -->
            <section class=\"col-lg-7 connectedSortable\">
              <!-- Custom tabs (Charts with tabs)-->
              <div class=\"nav-tabs-custom\">
                <!-- Tabs within a box -->
                
                <div class=\"tab-content no-padding\">

                    
                    
                    
                    
                    <div class=\"table-responsive\" align=\"center\">
                  
                  
                  <div class=\"input-group\"> <span class=\"input-group-addon\">Filter</span>

    <input id=\"filter\" type=\"text\" class=\"form-control\" placeholder=\"Type here...\">
</div>    

<script type=\"text/javascript\">
\t\$(document).ready(function () {

    (function (\$) {

        \$('#filter').keyup(function () {

            var rex = new RegExp(\$(this).val(), 'i');
            \$('.searchable tr').hide();
            \$('.searchable tr').filter(function () {
                return rex.test(\$(this).text());
            }).show();

        });

    }(jQuery));

});
</script>
    
    <h1> liste des Reclamations a traiter</h1>
    <br>
    <br>
    <br>
    <br>
    
    <div>
   
                        <table class=\"table table-responsive\">
                            <thead>
                                <tr class=\"warning\">
                           
                                <tr>   
                                    <th COLSPAN=4> Forum</th> 
                                     <th COLSPAN=\"3\">   Reclamation </th>
                                </tr>
                                <tr>
                                   
                                     <th>Id forum</th>
                                            <th>Categorie Forum</th>
                                           
                                            <th>Sujet Forum</th>
                                            <th>Date Forum</th>
                                            
                                            <th> Categorie Reclamation </th>
                                            <th> Raison Reclamation </th>
                                            <th> Date Reclamation </th>
                                            
                                           
                                                
                                    <th>Action</th>
                                </tr>

                            </thead>
                            <tbody class=\"searchable\">
                                 
                                ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recs"]) ? $context["recs"] : $this->getContext($context, "recs")));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 295
            echo "                                      
    
      
                                    <tr>
                                        
                                        <td>";
            // line 300
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reclamation"], "idForumRec", array()), "idForum", array()), "html", null, true);
            echo "</td>
    
        
        <td>";
            // line 303
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reclamation"], "idForumRec", array()), "CategorieForum", array()), "html", null, true);
            echo "</td>
    
        
        <td>";
            // line 306
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reclamation"], "idForumRec", array()), "libelleForum", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 307
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reclamation"], "idForumRec", array()), "dateForum", array()), "html", null, true);
            echo "</td>
    
       
        <td>";
            // line 310
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "categorieReclamation", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "raisonReclamation", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 312
            echo twig_escape_filter($this->env, $this->getAttribute($context["reclamation"], "dateReclamation", array()), "html", null, true);
            echo "</td>
    
     <td>

                                            
                                             
                                            <a href=\"";
            // line 318
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("refuser_forum", array("idForum" => $this->getAttribute($this->getAttribute($context["reclamation"], "idForumRec", array()), "idForum", array()))), "html", null, true);
            echo "\" class='btn btn-info'> Supprimer </a> 
                                        </td>
     </tr>
                                

                            </tbody>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "                        </table>
                        
                         
                                            <a href=\"";
        // line 328
        echo $this->env->getExtension('routing')->getPath("_graphePie3");
        echo "\" class='btn btn-success'> Voir Statistique Categorie </a> 
                                           
                    </div>

                            </div>
    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
              <!-- Chat box -->
                </div>
              </div>
           

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class=\"col-lg-5 connectedSortable\">

              <!-- Map box -->
               <!-- Calendar -->
              <div class=\"box box-solid bg-green-gradient\">
                <div class=\"box-header\">
                  <i class=\"fa fa-calendar\"></i>
                  <h3 class=\"box-title\">Calendar</h3>
                  <!-- tools box -->
                  <div class=\"pull-right box-tools\">
                    <!-- button with a dropdown -->
                    <div class=\"btn-group\">
                      <button class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i></button>
                      <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                        <li><a href=\"#\">Add new event</a></li>
                        <li><a href=\"#\">Clear events</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">View calendar</a></li>
                      </ul>
                    </div>
                    <button class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                    <button class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                  </div><!-- /. tools -->
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <!--The calendar -->
                  <div id=\"calendar\" style=\"width: 100%\"></div>
                </div><!-- /.box-body -->
                <div class=\"box-footer text-black\">
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <!-- Progress bars -->
                      
                      

                      
                      
                    </div><!-- /.col -->
                    <div class=\"col-sm-6\">
                      
                      

                      
                      
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.box -->
              <!-- /.box -->

             
              
              
              
              
              
           
              
              
              
              
              
              <!-- /.box -->

            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      
      
      
      <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
          <b>Version</b> 2.3.0
        </div>
        <strong> Copyright 2016 All For Deal </strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
          <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
          <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
          <!-- Home tab content -->
          <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
            <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
            <ul class=\"control-sidebar-menu\">
              <li>
                <a href=\"javascript::;\">
                  <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>
                  <div class=\"menu-info\">
                    <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"javascript::;\">
                  <i class=\"menu-icon fa fa-user bg-yellow\"></i>
                  <div class=\"menu-info\">
                    <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"javascript::;\">
                  <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>
                  <div class=\"menu-info\">
                    <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"javascript::;\">
                  <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>
                  <div class=\"menu-info\">
                    <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
            <ul class=\"control-sidebar-menu\">
              <li>
                <a href=\"javascript::;\">
                  <h4 class=\"control-sidebar-subheading\">
                    Custom Template Design
                    <span class=\"label label-danger pull-right\">70%</span>
                  </h4>
                  <div class=\"progress progress-xxs\">
                    <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"javascript::;\">
                  <h4 class=\"control-sidebar-subheading\">
                    Update Resume
                    <span class=\"label label-success pull-right\">95%</span>
                  </h4>
                  <div class=\"progress progress-xxs\">
                    <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"javascript::;\">
                  <h4 class=\"control-sidebar-subheading\">
                    Laravel Integration
                    <span class=\"label label-warning pull-right\">50%</span>
                  </h4>
                  <div class=\"progress progress-xxs\">
                    <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href=\"javascript::;\">
                  <h4 class=\"control-sidebar-subheading\">
                    Back End Framework
                    <span class=\"label label-primary pull-right\">68%</span>
                  </h4>
                  <div class=\"progress progress-xxs\">
                    <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
            <form method=\"post\">
              <h3 class=\"control-sidebar-heading\">General Settings</h3>
              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Report panel usage
                  <input type=\"checkbox\" class=\"pull-right\" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Allow mail redirect
                  <input type=\"checkbox\" class=\"pull-right\" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Expose author name in posts
                  <input type=\"checkbox\" class=\"pull-right\" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Show me as online
                  <input type=\"checkbox\" class=\"pull-right\" checked>
                </label>
              </div><!-- /.form-group -->

              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Turn off notifications
                  <input type=\"checkbox\" class=\"pull-right\">
                </label>
              </div><!-- /.form-group -->

              <div class=\"form-group\">
                <label class=\"control-sidebar-subheading\">
                  Delete chat history
                  <a href=\"javascript::;\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class=\"control-sidebar-bg\"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jQuery/jQuery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      \$.widget.bridge('uibutton', \$.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Morris.js charts -->
    <script src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <!-- jQuery Knob Chart -->
    <script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/js/app.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Admin/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "EspritDemandeBundle:Forum:reclamationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  830 => 657,  825 => 655,  820 => 653,  815 => 651,  810 => 649,  805 => 647,  800 => 645,  795 => 643,  791 => 642,  786 => 640,  781 => 638,  777 => 637,  772 => 635,  767 => 633,  763 => 632,  758 => 630,  749 => 624,  744 => 622,  447 => 328,  442 => 325,  429 => 318,  420 => 312,  416 => 311,  412 => 310,  406 => 307,  402 => 306,  396 => 303,  390 => 300,  383 => 295,  379 => 294,  254 => 172,  243 => 164,  232 => 156,  217 => 143,  214 => 142,  211 => 141,  203 => 135,  185 => 120,  163 => 100,  159 => 98,  156 => 94,  130 => 71,  121 => 65,  98 => 45,  81 => 31,  76 => 29,  71 => 27,  66 => 25,  61 => 23,  56 => 21,  51 => 19,  45 => 16,  40 => 14,  35 => 12,  30 => 10,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>Admin All For Deal | Dashboard</title>*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/bootstrap/css/bootstrap.min.css')}}">*/
/*     <!-- Font Awesome -->*/
/*     <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css')}}">*/
/*     <!-- Ionicons -->*/
/*     <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">*/
/*     <!-- Theme style -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/dist/css/AdminLTE.min.css')}}">*/
/*     <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*          folder instead of downloading all of them to reduce the load. -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/dist/css/skins/_all-skins.min.css')}}">*/
/*     <!-- iCheck -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/plugins/iCheck/flat/blue.css')}}">*/
/*     <!-- Morris chart -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/plugins/morris/morris.css')}}">*/
/*     <!-- jvectormap -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">*/
/*     <!-- Date Picker -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/plugins/datepicker/datepicker3.css')}}">*/
/*     <!-- Daterange picker -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/plugins/daterangepicker/daterangepicker-bs3.css')}}">*/
/*     <!-- bootstrap wysihtml5 - text editor -->*/
/*     <link rel="stylesheet" href="{{asset('Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*         <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body class="hold-transition skin-blue sidebar-mini">*/
/*     <div class="wrapper">*/
/* */
/*       <header class="main-header">*/
/*         <!-- Logo -->*/
/*         <a href="{{ path("acceuil2_demande")}}" class="logo">*/
/*           <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*           <span class="logo-mini"><b>A</b>LT</span> */
/*           <!-- logo for regular state and mobile devices -->*/
/*           <span class="logo-lg"><b>Admin</b><span class="highlight" style="color:red"> A</span>ll<span class="highlight" style="color:red">F</span>or<span class="highlight" style="color:red">D</span>eal</span>*/
/*         </a>*/
/*         <!-- Header Navbar: style can be found in header.less -->*/
/*         <nav class="navbar navbar-static-top" role="navigation">*/
/*           <!-- Sidebar toggle button-->*/
/*           <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*           </a>*/
/*           <div class="navbar-custom-menu">*/
/*             <ul class="nav navbar-nav">*/
/*                 */
/*              */
/*            */
/*               <!-- User Account: style can be found in dropdown.less -->*/
/*               <li class="dropdown user user-menu">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*                   <img src="{{asset('Admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">*/
/*                   <span class="hidden-xs">rootWalid</span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <!-- User image -->*/
/*                   <li class="user-header">*/
/*                     <img src="{{asset('Admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*                     <p>*/
/*                       rootWalid*/
/*                       <small>Admin All For Deal</small>*/
/*                     </p>*/
/*                   </li>*/
/*                   */
/*                   <!-- Menu Body -->*/
/*                  <!-- <li class="user-body">*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <a href="#">Followers</a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <a href="#">Sales</a>*/
/*                     </div>*/
/*                     <div class="col-xs-4 text-center">*/
/*                       <a href="#">Friends</a>*/
/*                     </div>*/
/*                   </li>!-->*/
/*                  */
/*                   <!-- Menu Footer-->*/
/*                   <li class="user-footer">*/
/*                     <div class="pull-left">*/
/*                  <a href="{#{ path("pidev_all_for_deal_AccesAdminCompteTest2") }#}" class="btn btn-default btn-flat">Profile</a>                  */
/*                          {#% for a in admin %}*/
/*       */
/*                         {% endfor %#}*/
/*                     </div>*/
/*                     <div class="pull-right">*/
/*                       <a href="{#{path("pidev_all_for_deal_LogoutAdmin2")}#}" class="btn btn-default btn-flat">Sign out</a>*/
/*                     </div> */
/*                   </li>*/
/*                 </ul>*/
/*               </li>*/
/*               <!-- Control Sidebar Toggle Button -->*/
/*               <li>*/
/*                 <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>*/
/*               </li>*/
/*             </ul>*/
/*           </div>*/
/*         </nav>*/
/*       </header>*/
/*       <!-- Left side column. contains the logo and sidebar -->*/
/*       <aside class="main-sidebar">*/
/*         <!-- sidebar: style can be found in sidebar.less -->*/
/*         <section class="sidebar">*/
/*           <!-- Sidebar user panel -->*/
/*           <div class="user-panel">*/
/*             <div class="pull-left image">*/
/*               <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">*/
/*             </div>*/
/*             <div class="pull-left info">*/
/*               <p>rootWalid</p>*/
/*               <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*             </div>*/
/*           </div> */
/*           <!-- search form -->*/
/*           */
/*           */
/*           */
/*           <!-- /.search form -->*/
/*           <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*           <ul class="sidebar-menu">*/
/*             <li class="header">MAIN NAVIGATION</li>*/
/*                 <li class="current_page"><a href="{#{path("pidev_all_for_deal_EspaceAdminAcceuil2")}#}">Home</a></li>*/
/*             <li class="active treeview">*/
/*               <a href="#">*/
/*                 <i class="fa fa-dashboard"></i> <span>Gestion Des Utilisateurs</span> <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               <ul class="treeview-menu">*/
/*                 <li class="active"><a href="{#{path("pidev_all_for_deal_EspaceAdminAllListUser2")}#}"><i class="fa fa-circle-o"></i>Utilisateurs Inscrits</a></li>*/
/*                 <li><a href="{#{path("pidev_all_for_deal_EditableEspaceAdminAllListUser2")}#}"><i class="fa fa-circle-o"></i>Reglages Utilisateurs</a></li>*/
/* 		<li><a href="{#{path("pidev_all_for_deal_EspaceAdminListeUsersBloques2")}#}"><i class="fa fa-circle-o"></i>Liste Des Utilisateurs Bloques</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             */
/*          */
/*             */
/*             */
/*             */
/*             */
/*             */
/*             */
/*             */
/*          <li class="treeview">*/
/*               <a href="{{ path("liste_demande_a_traiter")}}">*/
/*                 <i class="fa fa-edit"></i> <span>Gestion des Services</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               */
/*             </li>*/
/*             */
/*             <li class="treeview">*/
/*               <a href="{{ path("traitement_reclamation")}}">*/
/*                 <i class="fa fa-table"></i> <span>Gestion des Reclamations</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*               */
/*             </li>*/
/*             */
/*             <li class="treeview">*/
/*               <a href="{{ path("traitement_forum")}}">*/
/*                 <i class="fa fa-table"></i> <span>Gestion de Forum</span>*/
/*                 <i class="fa fa-angle-left pull-right"></i>*/
/*               </a>*/
/*              */
/*             </li>*/
/*             */
/*             */
/*             */
/*             */
/*             */
/*            */
/*             */
/*           </ul>*/
/*         </section>*/
/*         <!-- /.sidebar -->*/
/*       </aside>*/
/* */
/*       <!-- Content Wrapper. Contains page content -->*/
/*       <div class="content-wrapper">*/
/*         <!-- Content Header (Page header) -->*/
/*         <section class="content-header">*/
/*           */
/*           */
/*         </section>*/
/* */
/*         <!-- Main content -->*/
/*         <section class="content">*/
/*           <!-- Small boxes (Stat box) -->*/
/*           <div class="row">*/
/*             <div class="col-lg-3 col-xs-6">*/
/*               <!-- small box -->*/
/*              */
/*             </div><!-- ./col -->*/
/*             */
/*             <div class="col-lg-3 col-xs-6">*/
/*               <!-- small box -->*/
/*               */
/*             </div><!-- ./col -->*/
/*             <div class="col-lg-3 col-xs-6">*/
/*               <!-- small box -->*/
/*               */
/*             </div><!-- ./col -->*/
/*           </div><!-- /.row -->*/
/*           <!-- Main row -->*/
/*           <div class="row">*/
/*             <!-- Left col -->*/
/*             <section class="col-lg-7 connectedSortable">*/
/*               <!-- Custom tabs (Charts with tabs)-->*/
/*               <div class="nav-tabs-custom">*/
/*                 <!-- Tabs within a box -->*/
/*                 */
/*                 <div class="tab-content no-padding">*/
/* */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     <div class="table-responsive" align="center">*/
/*                   */
/*                   */
/*                   <div class="input-group"> <span class="input-group-addon">Filter</span>*/
/* */
/*     <input id="filter" type="text" class="form-control" placeholder="Type here...">*/
/* </div>    */
/* */
/* <script type="text/javascript">*/
/* 	$(document).ready(function () {*/
/* */
/*     (function ($) {*/
/* */
/*         $('#filter').keyup(function () {*/
/* */
/*             var rex = new RegExp($(this).val(), 'i');*/
/*             $('.searchable tr').hide();*/
/*             $('.searchable tr').filter(function () {*/
/*                 return rex.test($(this).text());*/
/*             }).show();*/
/* */
/*         });*/
/* */
/*     }(jQuery));*/
/* */
/* });*/
/* </script>*/
/*     */
/*     <h1> liste des Reclamations a traiter</h1>*/
/*     <br>*/
/*     <br>*/
/*     <br>*/
/*     <br>*/
/*     */
/*     <div>*/
/*    */
/*                         <table class="table table-responsive">*/
/*                             <thead>*/
/*                                 <tr class="warning">*/
/*                            */
/*                                 <tr>   */
/*                                     <th COLSPAN=4> Forum</th> */
/*                                      <th COLSPAN="3">   Reclamation </th>*/
/*                                 </tr>*/
/*                                 <tr>*/
/*                                    */
/*                                      <th>Id forum</th>*/
/*                                             <th>Categorie Forum</th>*/
/*                                            */
/*                                             <th>Sujet Forum</th>*/
/*                                             <th>Date Forum</th>*/
/*                                             */
/*                                             <th> Categorie Reclamation </th>*/
/*                                             <th> Raison Reclamation </th>*/
/*                                             <th> Date Reclamation </th>*/
/*                                             */
/*                                            */
/*                                                 */
/*                                     <th>Action</th>*/
/*                                 </tr>*/
/* */
/*                             </thead>*/
/*                             <tbody class="searchable">*/
/*                                  */
/*                                 {% for reclamation in recs%}*/
/*                                       */
/*     */
/*       */
/*                                     <tr>*/
/*                                         */
/*                                         <td>{{reclamation.idForumRec.idForum}}</td>*/
/*     */
/*         */
/*         <td>{{reclamation.idForumRec.CategorieForum}}</td>*/
/*     */
/*         */
/*         <td>{{reclamation.idForumRec.libelleForum}}</td>*/
/*         <td>{{reclamation.idForumRec.dateForum}}</td>*/
/*     */
/*        */
/*         <td>{{reclamation.categorieReclamation}}</td>*/
/*          <td>{{reclamation.raisonReclamation}}</td>*/
/*           <td>{{reclamation.dateReclamation}}</td>*/
/*     */
/*      <td>*/
/* */
/*                                             */
/*                                              */
/*                                             <a href="{{path('refuser_forum',{'idForum':reclamation.idForumRec.idForum})}}" class='btn btn-info'> Supprimer </a> */
/*                                         </td>*/
/*      </tr>*/
/*                                 */
/* */
/*                             </tbody>*/
/*                             {%endfor%}*/
/*                         </table>*/
/*                         */
/*                          */
/*                                             <a href="{{path('_graphePie3')}}" class='btn btn-success'> Voir Statistique Categorie </a> */
/*                                            */
/*                     </div>*/
/* */
/*                             </div>*/
/*     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/* 					*/
/* 					*/
/* 					*/
/* 					*/
/* 					*/
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*                     */
/*               <!-- Chat box -->*/
/*                 </div>*/
/*               </div>*/
/*            */
/* */
/*             </section><!-- /.Left col -->*/
/*             <!-- right col (We are only adding the ID to make the widgets sortable)-->*/
/*             <section class="col-lg-5 connectedSortable">*/
/* */
/*               <!-- Map box -->*/
/*                <!-- Calendar -->*/
/*               <div class="box box-solid bg-green-gradient">*/
/*                 <div class="box-header">*/
/*                   <i class="fa fa-calendar"></i>*/
/*                   <h3 class="box-title">Calendar</h3>*/
/*                   <!-- tools box -->*/
/*                   <div class="pull-right box-tools">*/
/*                     <!-- button with a dropdown -->*/
/*                     <div class="btn-group">*/
/*                       <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>*/
/*                       <ul class="dropdown-menu pull-right" role="menu">*/
/*                         <li><a href="#">Add new event</a></li>*/
/*                         <li><a href="#">Clear events</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#">View calendar</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                     <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*                   </div><!-- /. tools -->*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body no-padding">*/
/*                   <!--The calendar -->*/
/*                   <div id="calendar" style="width: 100%"></div>*/
/*                 </div><!-- /.box-body -->*/
/*                 <div class="box-footer text-black">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-6">*/
/*                       <!-- Progress bars -->*/
/*                       */
/*                       */
/* */
/*                       */
/*                       */
/*                     </div><!-- /.col -->*/
/*                     <div class="col-sm-6">*/
/*                       */
/*                       */
/* */
/*                       */
/*                       */
/*                     </div><!-- /.col -->*/
/*                   </div><!-- /.row -->*/
/*                 </div>*/
/*               </div><!-- /.box -->*/
/*               <!-- /.box -->*/
/* */
/*              */
/*               */
/*               */
/*               */
/*               */
/*               */
/*            */
/*               */
/*               */
/*               */
/*               */
/*               */
/*               <!-- /.box -->*/
/* */
/*             </section><!-- right col -->*/
/*           </div><!-- /.row (main row) -->*/
/* */
/*         </section><!-- /.content -->*/
/*       </div><!-- /.content-wrapper -->*/
/*       */
/*       */
/*       */
/*       */
/*       <footer class="main-footer">*/
/*         <div class="pull-right hidden-xs">*/
/*           <b>Version</b> 2.3.0*/
/*         </div>*/
/*         <strong> Copyright 2016 All For Deal </strong> All rights reserved.*/
/*       </footer>*/
/* */
/*       <!-- Control Sidebar -->*/
/*       <aside class="control-sidebar control-sidebar-dark">*/
/*         <!-- Create the tabs -->*/
/*         <ul class="nav nav-tabs nav-justified control-sidebar-tabs">*/
/*           <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>*/
/*           <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>*/
/*         </ul>*/
/*         <!-- Tab panes -->*/
/*         <div class="tab-content">*/
/*           <!-- Home tab content -->*/
/*           <div class="tab-pane" id="control-sidebar-home-tab">*/
/*             <h3 class="control-sidebar-heading">Recent Activity</h3>*/
/*             <ul class="control-sidebar-menu">*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <i class="menu-icon fa fa-birthday-cake bg-red"></i>*/
/*                   <div class="menu-info">*/
/*                     <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>*/
/*                     <p>Will be 23 on April 24th</p>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <i class="menu-icon fa fa-user bg-yellow"></i>*/
/*                   <div class="menu-info">*/
/*                     <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>*/
/*                     <p>New phone +1(800)555-1234</p>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>*/
/*                   <div class="menu-info">*/
/*                     <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>*/
/*                     <p>nora@example.com</p>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <i class="menu-icon fa fa-file-code-o bg-green"></i>*/
/*                   <div class="menu-info">*/
/*                     <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>*/
/*                     <p>Execution time 5 seconds</p>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*             </ul><!-- /.control-sidebar-menu -->*/
/* */
/*             <h3 class="control-sidebar-heading">Tasks Progress</h3>*/
/*             <ul class="control-sidebar-menu">*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <h4 class="control-sidebar-subheading">*/
/*                     Custom Template Design*/
/*                     <span class="label label-danger pull-right">70%</span>*/
/*                   </h4>*/
/*                   <div class="progress progress-xxs">*/
/*                     <div class="progress-bar progress-bar-danger" style="width: 70%"></div>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <h4 class="control-sidebar-subheading">*/
/*                     Update Resume*/
/*                     <span class="label label-success pull-right">95%</span>*/
/*                   </h4>*/
/*                   <div class="progress progress-xxs">*/
/*                     <div class="progress-bar progress-bar-success" style="width: 95%"></div>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <h4 class="control-sidebar-subheading">*/
/*                     Laravel Integration*/
/*                     <span class="label label-warning pull-right">50%</span>*/
/*                   </h4>*/
/*                   <div class="progress progress-xxs">*/
/*                     <div class="progress-bar progress-bar-warning" style="width: 50%"></div>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*               <li>*/
/*                 <a href="javascript::;">*/
/*                   <h4 class="control-sidebar-subheading">*/
/*                     Back End Framework*/
/*                     <span class="label label-primary pull-right">68%</span>*/
/*                   </h4>*/
/*                   <div class="progress progress-xxs">*/
/*                     <div class="progress-bar progress-bar-primary" style="width: 68%"></div>*/
/*                   </div>*/
/*                 </a>*/
/*               </li>*/
/*             </ul><!-- /.control-sidebar-menu -->*/
/* */
/*           </div><!-- /.tab-pane -->*/
/*           <!-- Stats tab content -->*/
/*           <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->*/
/*           <!-- Settings tab content -->*/
/*           <div class="tab-pane" id="control-sidebar-settings-tab">*/
/*             <form method="post">*/
/*               <h3 class="control-sidebar-heading">General Settings</h3>*/
/*               <div class="form-group">*/
/*                 <label class="control-sidebar-subheading">*/
/*                   Report panel usage*/
/*                   <input type="checkbox" class="pull-right" checked>*/
/*                 </label>*/
/*                 <p>*/
/*                   Some information about this general settings option*/
/*                 </p>*/
/*               </div><!-- /.form-group -->*/
/* */
/*               <div class="form-group">*/
/*                 <label class="control-sidebar-subheading">*/
/*                   Allow mail redirect*/
/*                   <input type="checkbox" class="pull-right" checked>*/
/*                 </label>*/
/*                 <p>*/
/*                   Other sets of options are available*/
/*                 </p>*/
/*               </div><!-- /.form-group -->*/
/* */
/*               <div class="form-group">*/
/*                 <label class="control-sidebar-subheading">*/
/*                   Expose author name in posts*/
/*                   <input type="checkbox" class="pull-right" checked>*/
/*                 </label>*/
/*                 <p>*/
/*                   Allow the user to show his name in blog posts*/
/*                 </p>*/
/*               </div><!-- /.form-group -->*/
/* */
/*               <h3 class="control-sidebar-heading">Chat Settings</h3>*/
/* */
/*               <div class="form-group">*/
/*                 <label class="control-sidebar-subheading">*/
/*                   Show me as online*/
/*                   <input type="checkbox" class="pull-right" checked>*/
/*                 </label>*/
/*               </div><!-- /.form-group -->*/
/* */
/*               <div class="form-group">*/
/*                 <label class="control-sidebar-subheading">*/
/*                   Turn off notifications*/
/*                   <input type="checkbox" class="pull-right">*/
/*                 </label>*/
/*               </div><!-- /.form-group -->*/
/* */
/*               <div class="form-group">*/
/*                 <label class="control-sidebar-subheading">*/
/*                   Delete chat history*/
/*                   <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>*/
/*                 </label>*/
/*               </div><!-- /.form-group -->*/
/*             </form>*/
/*           </div><!-- /.tab-pane -->*/
/*         </div>*/
/*       </aside><!-- /.control-sidebar -->*/
/*       <!-- Add the sidebar's background. This div must be placed*/
/*            immediately after the control sidebar -->*/
/*       <div class="control-sidebar-bg"></div>*/
/*     </div><!-- ./wrapper -->*/
/* */
/*     <!-- jQuery 2.1.4 -->*/
/*     <script src="{{asset('Admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>*/
/*     <!-- jQuery UI 1.11.4 -->*/
/*     <script src="{{asset('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js')}}"></script>*/
/*     <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->*/
/*     <script>*/
/*       $.widget.bridge('uibutton', $.ui.button);*/
/*     </script>*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <script src="{{asset('Admin/bootstrap/js/bootstrap.min.js')}}"></script>*/
/*     <!-- Morris.js charts -->*/
/*     <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>*/
/*     <script src="{{asset('Admin/plugins/morris/morris.min.js')}}"></script>*/
/*     <!-- Sparkline -->*/
/*     <script src="{{asset('Admin/plugins/sparkline/jquery.sparkline.min.js')}}"></script>*/
/*     <!-- jvectormap -->*/
/*     <script src="{{asset('Admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>*/
/*     <script src="{{asset('Admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>*/
/*     <!-- jQuery Knob Chart -->*/
/*     <script src="{{asset('Admin/plugins/knob/jquery.knob.js')}}"></script>*/
/*     <!-- daterangepicker -->*/
/*     <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')}}"></script>*/
/*     <script src="{{asset('Admin/plugins/daterangepicker/daterangepicker.js')}}"></script>*/
/*     <!-- datepicker -->*/
/*     <script src="{{asset('Admin/plugins/datepicker/bootstrap-datepicker.js')}}"></script>*/
/*     <!-- Bootstrap WYSIHTML5 -->*/
/*     <script src="{{asset('Admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>*/
/*     <!-- Slimscroll -->*/
/*     <script src="{{asset('Admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{asset('Admin/plugins/fastclick/fastclick.min.js')}}"></script>*/
/*     <!-- AdminLTE App -->*/
/*     <script src="{{asset('Admin/dist/js/app.min.js')}}"></script>*/
/*     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->*/
/*     <script src="{{asset('Admin/dist/js/pages/dashboard.js')}}"></script>*/
/*     <!-- AdminLTE for demo purposes -->*/
/*     <script src="{{asset('Admin/dist/js/demo.js')}}"></script>*/
/*   </body>*/
/* </html>*/
/* */
