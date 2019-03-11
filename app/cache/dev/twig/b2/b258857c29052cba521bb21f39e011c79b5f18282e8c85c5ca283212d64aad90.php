<?php

/* EspritDemandeBundle:Demande:user.html.twig */
class __TwigTemplate_7304f651f7fe2fdc71083bcff8797ea8b91d08ef1ee7bbc5fe2abcd89362eed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html' => array($this, 'block_html'),
            'head' => array($this, 'block_head'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'fless' => array($this, 'block_fless'),
            'logout' => array($this, 'block_logout'),
            'Login' => array($this, 'block_Login'),
            'Register' => array($this, 'block_Register'),
            'tabs' => array($this, 'block_tabs'),
            'compteUser' => array($this, 'block_compteUser'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('html', $context, $blocks);
    }

    public function block_html($context, array $blocks = array())
    {
        // line 4
        echo "<!DOCTYPE html>
<html>
<head>";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 66
        echo "    </head>
    <body>
         
        ";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        // line 963
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        echo " ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 39
        echo "<!----drop down----->
";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo " 
        ";
    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        echo "                 
<title>Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Community Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-3.1.1.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap1.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap1.min.js"), "html", null, true);
        echo "\"></script>
<!-- Custom Theme files -->
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

<!--webfont-->
<link href='";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=Oswald:300,400,700"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
<link href='";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=PT+Sans:400,700"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
<link href='";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//fonts.googleapis.com/css?family=Fugaz+One"), "html", null, true);
        echo "' rel='stylesheet' type='text/css'>
<!-- Owl Stylesheets -->
<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
<!----font-Awesome----->
<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"> 
<!----font-Awesome----->
<!--light-box-files -->
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.chocolat.js"), "html", null, true);
        echo "\"></script>
<link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/chocolat.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" charset=\"utf-8\" />
<!--light-box-files -->
     ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "<script>
\$(document).ready(function(){
    \$(\".dropdown\").hover(            
        function() {
            \$('.dropdown-menu', this).stop( true, true ).slideDown(\"fast\");
            \$(this).toggleClass('open');        
        },
        function() {
            \$('.dropdown-menu', this).stop( true, true ).slideUp(\"fast\");
            \$(this).toggleClass('open');       
        }
    );
});
</script>

<script type=\"text/javascript\" charset=\"utf-8\">
\$(function() {
\t\$('.gallery a').Chocolat();
});
</script>



";
    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        echo " 
        <div class=\"header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"col-sm-3 logo\">
                            <h1><a href=\"";
        // line 73
        echo "\"><span class=\"highlight\">A</span>ll<span class=\"highlight\">F</span>or<span class=\"highlight\">D</span>eal</a></h1>
\t\t\t</div>
\t\t    <div class=\"col-sm-9 logo_right\">
\t\t       <div class=\"social\">
\t\t\t\t  <a href=\"https://www.facebook.com\" class=\"link facebook\" target=\"_parent\"><span class=\"fa fa-facebook\"></span></a>
\t\t\t\t  <a href=\"https://twitter.com/?lang=en\" class=\"link twitter\" target=\"_parent\"><span class=\"fa fa-twitter\"></span></a>
\t\t\t\t  <a href=\"https://www.google.tn/\" class=\"link google\" target=\"_parent\"><span class=\"fa fa-google-plus\"></span></a>
\t\t\t\t  <a href=\"https://www.linkedin.com/nhome/\" class=\"link google\" target=\"_parent\"><span class=\"fa fa-linkedin\"></span></a>
\t\t\t\t  <a href=\"https://www.google.tn/\" class=\"link google\" target=\"_parent\"><span class=\"fa fa-tumblr\"></span></a>    
                    </div>
\t\t\t<!-- script for menu -->
                        ";
        // line 84
        $this->displayBlock('fless', $context, $blocks);
        // line 96
        echo "\t\t\t<div class=\"clearfix\"> </div>
\t\t\t<!-- Modal -->
                           <!-- Start Login !-->
                           ";
        // line 99
        $this->displayBlock('Login', $context, $blocks);
        // line 159
        echo "                           <!-- End Login !-->
                           
\t\t\t\t <!-- Modal -->
               <!-- Start Registration !-->     
                                 ";
        // line 163
        $this->displayBlock('Register', $context, $blocks);
        // line 351
        echo "     
                <!-- End Registration !-->    
                     </div>
\t\t         </div>
\t\t     </div>
\t\t\t <div class=\"modal fade\" id=\"applyModal_2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"applyModalLabel\" aria-hidden=\"true\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t&times;</button>
\t\t\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">
\t\t\t\t\t\t\t\tPlease Choose Your Location</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t <form class=\"form-horizontal\" role=\"form\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<select id=\"basic2\" class=\"show-tick form-control\" multiple>
\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Popular Cities\">
\t\t\t\t\t\t\t\t\t\t\t<option selected style=\"display:none;color:#eee;\">All India</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Ahmedabad</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Bangalore</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Chandigarh</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Chennai</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Coimbatore</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Delhi</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Gurgaon</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Hyderabad</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Jaipur</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Kochi</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Kolkata</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Lucknow</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Mumbai</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Noida</option>
\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"More Cities\">
\t\t\t\t\t\t\t\t\t\t\t<optgroup label=\"Andhra Pradesh\">
\t\t\t\t\t\t\t\t\t\t\t<option>Anantapur</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Chinnamandem</option>
\t\t\t\t\t\t\t\t\t\t\t<option>Gudur</option><option>Guntur</option><option>Jangareddy Gudem</option><option>Kakinada</option><option>Kurnool</option><option>Martur</option><option>Parvathipuram</option><option>Rajahmundry</option><option>Tenali</option><option>Tirupati</option><option>Vijayawada</option><option>Vizag</option><option>Vizianagaram</option></optgroup><optgroup label=\"Arunachal Pradesh\"><option>Tawang</option><option>Ziro</option></optgroup><optgroup label=\"Assam\"><option>Dibrugarh</option><option>Guwahati</option><option>Jorhat</option><option>Silchar</option><option>Tinsukia</option></optgroup><optgroup label=\"Bihar\"><option>Hajipur</option><option>Patna</option></optgroup><optgroup label=\"Chhattisgarh\"><option>Bhilai</option><option>Bilaspur</option><option>Champa</option><option>Dhamtari</option><option>Durg</option><option>Jagdalpur</option><option>Kawardha</option><option>Kondagaon</option><option>Korba</option><option>Raigarh</option><option>Raipur</option><option>Tilda Neora</option></optgroup><optgroup label=\"Croatia\"><option>Dubrovnik</option></optgroup><optgroup label=\"Goa\"><option>Goa</option></optgroup><optgroup label=\"Gujarat\"><option>Adipur</option><option>Ahmedabad</option><option>Anand</option><option>Ankleshwar</option><option>Bharuch</option><option>Bhavnagar</option><option>Daman</option><option>Gandhidham</option><option>Gandhinagar</option><option>Himmatnagar</option><option>Idar</option><option>Jamnagar</option><option>Jetpur</option><option>Junagadh</option><option>Kutch</option><option>Nadiad</option><option>Navsari</option><option value=\"PALN\">Palanpur</option><option value=\"PATA\">Patan</option><option value=\"RAJK\">Rajkot</option><option value=\"SANA\">Sanand</option><option value=\"SILV\">Silvassa</option><option value=\"SURT\">Surat</option><option value=\"VAD\">Vadodara</option><option value=\"VLSD\">Valsad</option><option value=\"VAPI\">Vapi</option></optgroup><optgroup label=\"Haryana\"><option value=\"AMB\">Ambala</option><option value=\"DHRA\">Dharuhera</option><option value=\"FARI\">Faridabad</option><option value=\"HISR\">Hisar</option><option value=\"JHAJ\">Jhajjar</option><option value=\"JIND\">Jind</option><option value=\"KAIT\">Kaithal</option><option value=\"KARN\">Karnal</option><option value=\"KUND\">Kundli</option><option value=\"KURU\">Kurukshetra</option><option value=\"PNCH\">Panchkula</option><option value=\"PAN\">Panipat</option><option value=\"REWA\">Rewari</option><option value=\"ROH\">Rohtak</option><option value=\"SISA\">Sirsa</option><option value=\"RAIH\">Sonipat</option><option value=\"YAMU\">Yamunanagar</option></optgroup><optgroup label=\"Himachal Pradesh\"><option value=\"BADD\">Baddi</option><option value=\"DMSL\">Dharamsala</option><option value=\"HAMI\">Hamirpur (HP)</option><option value=\"KANG\">Kangra</option><option value=\"KULU\">Kullu</option><option value=\"MANA\">Manali</option><option value=\"SMLA\">Shimla</option><option value=\"SCO\">Solan</option></optgroup><optgroup label=\"Jammu and Kashmir\"><option value=\"JAMM\">Jammu</option><option value=\"KATH\">Kathua</option><option value=\"KATR\">Katra</option><option value=\"LEHA\">Ladakh</option></optgroup><optgroup label=\"Jharkhand\"><option value=\"BOKA\">Bokaro</option><option value=\"DOGH\">Deoghar</option><option value=\"DHAN\">Dhanbad(Jharkhand)</option><option value=\"JMDP\">Jamshedpur</option><option value=\"RANC\">Ranchi</option></optgroup><optgroup label=\"Karnataka\"><option value=\"BELG\">Belgaum</option><option value=\"BANG\">Bengaluru</option><option value=\"BIDR\">Bidar</option><option value=\"COOR\">Coorg</option><option value=\"DAVA\">Davangere</option><option value=\"GULB\">Gulbarga</option><option value=\"HUBL\">Hubli</option><option value=\"KWAR\">Karwar</option><option value=\"MLR\">Mangalore</option><option value=\"MANI\">Manipal</option><option value=\"MYS\">Mysore</option><option value=\"TUMK\">Tumkur</option><option value=\"UDUP\">Udupi</option></optgroup><optgroup label=\"Kerala\"><option value=\"99\">Alappuzha</option><option value=\"ANHL\">Anchal</option><option value=\"ANGA\">Angamaly</option><option value=\"ERNK\">Ernakulam</option><option value=\"KANN\">Kannur</option><option value=\"KARG\">Karunagapally</option><option value=\"KOCH\">Kochi</option><option value=\"KOLM\">Kollam</option><option value=\"KTYM\">Kottayam</option><option value=\"MVLR\">Mavellikara</option><option value=\"THAL\">Thalayolaparambu</option><option value=\"THSR\">Thrissur</option><option value=\"TRIV\">Trivandrum</option></optgroup><optgroup label=\"Madhya Pradesh\"><option value=\"BLGT\">Balaghat</option><option value=\"BETU\">Betul</option><option value=\"BHOP\">Bhopal</option><option value=\"CHIN\">Chhindwara</option><option value=\"DEWAS\">Dewas</option><option value=\"GWAL\">Gwalior</option><option value=\"HRDA\">Harda</option><option value=\"IND\">Indore</option><option value=\"JABL\">Jabalpur</option><option value=\"KHDW\">Khandwa</option><option value=\"NMCH\">Neemuch</option><option value=\"RATL\">Ratlam</option><option value=\"SAMP\">Sagar</option><option value=\"SARN\">Sarni</option><option value=\"SEHO\">Sehore</option><option value=\"SEON\">Seoni</option><option value=\"SHIV\">Shivpuri</option><option value=\"UJJN\">Ujjain</option></optgroup><optgroup label=\"Maharashtra\"><option value=\"AHMED\">Ahmednagar</option><option value=\"AKOL\">Akola</option><option value=\"ALBG\">Alibaug</option><option value=\"AMRA\">Amravati</option><option value=\"AURA\">Aurangabad</option><option value=\"BARA\">Baramati</option><option value=\"BEED\">Beed</option><option value=\"BHIW\">Bhiwandi</option><option value=\"BOIS\">Boisar</option><option value=\"BULD\">Buldana</option><option value=\"CHAN\">Chandrapur</option><option value=\"DHLE\">Dhule</option><option value=\"DHUL\">Dhulia</option><option value=\"INDA\">Indapur</option><option value=\"JALG\">Jalgaon</option><option value=\"KHED\">Khed</option><option value=\"KHOP\">Khopoli</option><option value=\"KOLH\">Kolhapur</option><option value=\"LAT\">Latur</option><option value=\"LAVA\">Lavasa</option><option value=\"LNVL\">Lonavala</option><option value=\"MHAD\">Mahad</option><option value=\"MALE\">Malegaon</option><option value=\"MUMBAI\">Mumbai</option><option value=\"NAGP\">Nagpur</option><option value=\"NAND\">Nanded</option><option value=\"NASK\">Nashik</option><option value=\"PALG\">Palghar</option><option value=\"PANC\">Panchgani</option><option value=\"PARB\">Parbhani</option><option value=\"PEN\">Pen</option><option value=\"PHAL\">Phaltan</option><option value=\"PIMP\">Pimpri</option><option value=\"PUNE\">Pune</option><option value=\"RAI\">Raigad</option><option value=\"SANG\">Sangli</option><option value=\"SATA\">Satara</option><option value=\"SOLA\">Solapur</option><option value=\"TMB\">Tembhode</option><option value=\"UDGR\">Udgir</option><option value=\"WARD\">Wardha</option></optgroup><optgroup label=\"Meghalaya\"><option value=\"RNG\">Rongjeng</option><option value=\"SHLG\">Shillong</option></optgroup><optgroup label=\"Nagaland\"><option value=\"DMPR\">Dimapur</option></optgroup><optgroup label=\"NCR\"><option value=\"NCR\">National Capital Region (NCR)</option></optgroup><optgroup label=\"Orissa\"><option value=\"BLSR\">Balasore</option><option value=\"BHUB\">Bhubaneshwar</option><option value=\"PURI\">Puri</option><option value=\"SAMB\">Sambalpur</option></optgroup><optgroup label=\"Punjab\"><option value=\"ABOR\">Abohar</option><option value=\"AHMG\">Ahmedgarh</option><option value=\"AMRI\">Amritsar</option><option value=\"BNGA\">Banga</option><option value=\"BAR\">Barnala</option><option value=\"BHAT\">Bathinda</option><option value=\"CHD\">Chandigarh</option><option value=\"HOSH\">Hoshiarpur</option><option value=\"JALA\">Jalandhar</option><option value=\"KHAN\">Khanna</option><option value=\"KOTK\">Kotkapura</option><option value=\"LUDH\">Ludhiana</option><option value=\"MNSA\">Mansa</option><option value=\"MOGA\">Moga</option><option value=\"MOHL\">Mohali</option><option value=\"NAVN\">Nawanshahr</option><option value=\"PATH\">Pathankot</option><option value=\"PATI\">Patiala</option><option value=\"PATR\">Patran</option><option value=\"RUPN\">Rupnagar</option><option value=\"SANR\">Sangrur</option><option value=\"ZIRK\">Zirakpur</option></optgroup><optgroup label=\"Rajasthan\"><option value=\"ABRD\">Abu Road</option><option value=\"AJMER\">Ajmer</option><option value=\"ALSR\">Alsisar (Rajasthan)</option><option value=\"ALWR\">Alwar</option><option value=\"BANS\">Banswara</option><option value=\"BEAW\">Beawar</option><option value=\"BHIL\">Bhilwara</option><option value=\"BHWD\">Bhiwadi</option><option value=\"BIK\">Bikaner</option><option value=\"DAUS\">Dausa</option><option value=\"JAIP\">Jaipur</option><option value=\"JSMR\">Jaisalmer</option><option value=\"JODH\">Jodhpur</option><option value=\"KISH\">Kishangarh</option><option value=\"KOTA\">Kota</option><option value=\"NEEM\">Neemrana</option><option value=\"SIKR\">Sikar</option><option value=\"SRIG\">Sri Ganganagar</option><option value=\"UDAI\">Udaipur</option></optgroup><optgroup label=\"Singapore\"><option value=\"SING\">Singapore</option></optgroup><optgroup label=\"Tamil Nadu\"><option value=\"ARIY\">Ariyalur</option><option value=\"ARNI\">Arni</option><option value=\"ARUP\">Aruppukottai</option><option value=\"CHEN\">Chennai</option><option value=\"COIM\">Coimbatore</option><option value=\"CUDD\">Cuddalore</option><option value=\"DHAR\">Dharapuram</option><option value=\"DMPI\">Dharmapuri</option><option value=\"DIND\">Dindigul</option><option value=\"EROD\">Erode</option><option value=\"KNPM\">Kanchipuram</option><option value=\"KUMB\">Kumbakonam</option><option value=\"MADU\">Madurai</option><option value=\"MTPM\">Mettuppalayam</option><option value=\"OOTY\">Ooty</option><option value=\"POND\">Pondicherry</option><option value=\"PUDH\">Pudhukottai</option><option value=\"SALM\">Salem</option><option value=\"SIV\">Sivakasi</option><option value=\"TAJO\">Tanjore</option><option value=\"TENK\">Tenkasi</option><option value=\"TIRV\">Tirunelveli</option><option value=\"TIRP\">Tirupur</option><option value=\"TRIC\">Trichy</option><option value=\"VELL\">Vellore</option></optgroup><optgroup label=\"Telangana\"><option value=\"ADIL\">Adilabad</option><option value=\"AMAN\">Amangal</option><option value=\"HYD\">Hyderabad</option><option value=\"KARIM\">Karimnagar</option><option value=\"KHAM\">Khammam</option><option value=\"MRGD\">Miryalaguda</option><option value=\"NIZA\">Nizamabad</option><option value=\"PEDA\">Peddapalli</option><option value=\"POCH\">Pochampally</option><option value=\"SDDP\">Siddipet</option><option value=\"SURY\">Suryapet</option><option value=\"UPPA\">Uppal</option><option value=\"WAR\">Warangal</option></optgroup><optgroup label=\"Tripura \"><option value=\"AGAR\">Agartala</option></optgroup><optgroup label=\"Uttar Pradesh\"><option value=\"AGRA\">Agra</option><option value=\"ALI\">Aligarh</option><option value=\"ALLH\">Allahabad</option><option value=\"BARE\">Bareilly</option><option value=\"BIJ\">Bijnor</option><option value=\"GHAR\">Ghazipur</option><option value=\"GRKP\">Gorakhpur</option><option value=\"KANP\">Kanpur</option><option value=\"LUCK\">Lucknow</option><option value=\"MATH\">Mathura</option><option value=\"MERT\">Meerut</option><option value=\"MORA\">Moradabad</option><option value=\"MUZ\">Muzaffarnagar</option><option value=\"RENU\">Renukoot</option><option value=\"SAHA\">Saharanpur</option><option value=\"VAR\">Varanasi</option></optgroup><optgroup label=\"Uttarakhand\"><option value=\"DEH\">Dehradun</option><option value=\"HRDR\">Haridwar</option><option value=\"MSS\">Mussoorie</option><option value=\"NAIN\">Nainital</option><option value=\"RAMN\">Ramnagar</option><option value=\"RKES\">Rishikesh</option><option value=\"ROOR\">Roorkee</option><option value=\"RUDP\">Rudrapur</option></optgroup><optgroup label=\"West Bengal\"><option value=\"ASANSOL\">Asansol</option><option value=\"BEHA\">Berhampore</option><option value=\"BLPR\">Bolpur</option><option value=\"BURD\">Burdwan</option><option value=\"COBE\">Cooch Behar</option><option value=\"DARJ\">Darjeeling</option><option value=\"DURGA\">Durgapur</option><option value=\"HALD\">Haldia</option><option value=\"HOOG\">Hooghly</option><option value=\"HWRH\">Howrah</option><option value=\"JPG\">Jalpaiguri</option><option value=\"KOLK\">Kolkata</option><option value=\"RANA\">Ranaghat</option><option value=\"SILI\">Siliguri</option></optgroup>
\t\t\t\t\t\t\t\t\t\t</optgroup>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </form>    
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  <div class=\"clearfix\"></div>
\t\t </div>
\t   </div>
</div>
<nav class=\"navbar nav_bottom\" role=\"navigation\">
 <div class=\"container\">
 <!-- Brand and toggle get grouped for better mobile display -->
   <div class=\"navbar-header nav_2\">
      <button type=\"button\" class=\"navbar-toggle collapsed navbar-toggle1\" data-toggle=\"collapse\" data-target=\"#bs-megadropdown-tabs\">Menu
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\"></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
     ";
        // line 416
        $this->displayBlock('tabs', $context, $blocks);
        // line 441
        echo "   </div>
</nav>
<script type=\"text/javascript\">
\t\t\$(function() {
\t\tblinkeffect('#txtblnk');
\t\t})
\t\tfunction blinkeffect(selector) {
\t\t\$(selector).fadeOut('slow', function() {
\t\t\$(this).fadeIn('slow', function() {
\t\tblinkeffect(this);
\t\t});
\t\t});
\t\t}
</script>

<div align=\"center\">
    
    <h1> Information sur le demandeur</h1>
    <br>
    <br>





  <!--  


<div class=\"panel-body no-padding\">
   
                        <table class=\"table table-striped\">
                            <thead>
                                <tr class=\"warning\">

                                <tr>
                                    <th>#</th>
                                     
                                    
                                            <th>nom demandeur</th>
                                            <th>prenom demandeur</th>
                                            <th>adresse email demandeur</th>
                                            <th>telephone demandeur</th>
                                            <th>statut demandeur</th>
                                                
                                    
                                </tr>

                            </thead>
                            <tbody>
                                  ";
        // line 490
        $context["conteur"] = 0;
        // line 491
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes"]) ? $context["demandes"] : $this->getContext($context, "demandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 492
            echo "                                      ";
            $context["conteur"] = ((isset($context["conteur"]) ? $context["conteur"] : $this->getContext($context, "conteur")) + 1);
            // line 493
            echo "                                      
                                    <tr>
                                        <td>";
            // line 495
            echo twig_escape_filter($this->env, (isset($context["conteur"]) ? $context["conteur"] : $this->getContext($context, "conteur")), "html", null, true);
            echo "</td>
                                        
    
        
        
   
       
        <td>";
            // line 502
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "nomUser", array()), "html", null, true);
            echo "</td>
   
        
        <td>";
            // line 505
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "prenomUser", array()), "html", null, true);
            echo "</td>
   
        
        <td>";
            // line 508
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "emailUser", array()), "html", null, true);
            echo "</td>
   
       
        <td>";
            // line 511
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "telUser", array()), "html", null, true);
            echo "</td>
   
       
        <td>";
            // line 514
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "statutUser", array()), "html", null, true);
            echo "</td>
         



                                        


                                    </tr>
                                

                            </tbody>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 527
        echo "                        </table>
                    </div>

                            </div>
    
                        -->
            
                       
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                      
                         ";
        // line 554
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demandes"]) ? $context["demandes"] : $this->getContext($context, "demandes")));
        foreach ($context['_seq'] as $context["_key"] => $context["demande"]) {
            // line 555
            echo "                         
       <form name=\"row\" method=\"post\" class=\"register\" >
        <table align=\"center\">
            
            
                
                <tr>          
               <td> <h5><span class=\"label label-pill label-primary\"> Nom : </span></h5> </td>   
               <td> 
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"nom_id\" id=\"nom\" disabled=\"disabled\" placeholder=\"Nom\" required value=\"";
            // line 566
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "nomUser", array()), "html", null, true);
            echo "\" >
                                    <span class=\"error\">  </span>
                                    <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-users\"></i>
                                    </label>
                                  </label>
                              </div>  
             </td>    
            </tr> 
                
           <!-- <tr>
                <td> <label> Nom : </label> </td>   
                <td> <input type=\"text\" name=\"nom_id\" id=\"nom\" placeholder=\"Nom\" required value=\"";
            // line 578
            echo "\"  />  </td>  
            </tr> !-->
            
            <tr>          
               <td> <h5><span class=\"label label-pill label-primary\"> prenom : </span></h5> </td>   
               <td> 
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"nom_id\" id=\"nom\" disabled=\"disabled\" placeholder=\"Nom\" required value=\"";
            // line 586
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "prenomUser", array()), "html", null, true);
            echo "\" >
                                    <span class=\"error\">  </span>
                                    <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-users\"></i>
                                    </label>
                                  </label>
                              </div>  
             </td>    
            </tr> 
              
           <!-- <tr>
                <td> <label> Nom : </label> </td>
                <td>
                 <div class=\"section\">
                                   <label for=\"nom\" class=\"field prepend-icon\">
                                       <input type=\"text\" name=\"nom_id\" id=\"nom\" placeholder=\"Nom\" required value=\"";
            // line 601
            echo "\" onkeyup=\"verif_text()\">
                                    <span class=\"error\">  </span>
                                    <label for=\"nom_id\" class=\"field-icon\">
                                    <i class=\"fa fa-users\"></i>
                                    </label>  
                                  </label>
                                   <div id=\"img_nom\"></div> 
                 </div>
                </td>
        </tr>      !-->                  
          <!--  <tr>
                <td> <label> Prénom : </label> </td>
                <td> <input type=\"text\"  name=\"prnm_id\" id=\"prenom\" placeholder=\"Prénom\" value=\"";
            // line 613
            echo "\"  /> </td>
            </tr>   !-->
            
             <tr>          
               <td> <h5><span class=\"label label-pill label-primary\"> e-mail :</span></h5> </td>   
               <td> 
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"prnm_id\" id=\"prenom\" disabled=\"disabled\" placeholder=\"Prénom\" value=\"";
            // line 621
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "emailUser", array()), "html", null, true);
            echo "\" >
                                    <span class=\"error\">  </span>
                                    <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                    </label>
                                  </label>
                              </div>  
             </td>    
            </tr> 
            
         <!--   <tr>
                <td> <label> Addresse : </label> </td>
                <td> <input type=\"text\" name=\"address_id\" id=\"addresse\" placeholder=\"Addresse\" value=\"";
            // line 633
            echo "\"  /> </td>
            </tr>   !-->
            
            <tr>          
             <td> <h5><span class=\"label label-pill label-primary\"> telephone :</span></h5> </td>   
               <td> 
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"address_id\" id=\"addresse\" disabled=\"disabled\" placeholder=\"Addresse\" value=\"";
            // line 641
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "telUser", array()), "html", null, true);
            echo "\" >
                                    <span class=\"error\">  </span>
                                    <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-home\"></i>
                                    </label>
                                  </label>
                              </div>  
             </td>    
            </tr> 
            
          <!--  <tr>
                <td> <label> Email : </label> </td>
                <td> <input type=\"text\" name=\"email_id\" id=\"email\" placeholder=\"Email\" value=\"";
            // line 653
            echo "\"  /> </td>
            </tr>   !-->
             
            
            
          <!--  <tr>
                <td> <label> Numéro Téléphone : </label> </td>
                <td> <input type=\"text\" name=\"mobile_number\" id=\"tel\" placeholder=\"Mobile Number\" value=\"";
            // line 660
            echo "\"  /> </td>
            </tr> !-->
            
             
            
           <!-- <tr>
                <td> <label> Statut : </label> </td>           
                <td> <input type=\"text\" name=\"getName\" id=\"getName\" value=\"";
            // line 667
            echo "\" disabled /> </td>
             <td>           
              <select value=\"\" name=\"statut\">  
             <option value=\"null\">Selectionner Statut</option>
                <option value=\"Particulier\" name=\"Particulier\">Entreprise</option>
                <option value=\"Entreprise\"  name=\"Entreprise\">Particulier</option>
              </select>
             </td>   
            </tr>  !--> 

           <!-- <tr>          
             <td> <h5><span class=\"label label-pill label-primary\"> Statut : </span></h5> </td>   
               <td> 
                    <div class=\"section\">
                        <label for=\"name\" class=\"field prepend-icon\">
                            <select path=\"country\" id=\"country\" class=\"form-control input-sm\" name=\"statut\">
                                  <option  value=\"";
            // line 683
            echo "</option>
                                  <option  value=\"\">----------------------------</option>
                                  <option value=\"Particulier\" name=\"Particulier\">Particulier</option>
                                  <option value=\"Entreprise\"  name=\"Entreprise\">Entreprise</option>
                            </select>
                            <label for=\"name\" class=\"field-icon\">
                                <i class=\"fa fa-user\"></i>
                            </label>
                        </label>
                    </div> 
             </td>    
            </tr> 
            !-->
          <!--  <tr>
                <td> <label> Login : </label> </td>
                <td> <input type=\"text\" name=\"login_id\" id=\"login\" placeholder=\"Login\" value=\"";
            // line 698
            echo "\"  /> </td>
            </tr> !-->
            
            <tr>
             <td> <h5><span class=\"label label-pill label-primary\"> statut :   </span></h5> </td>   
             <td>             
                     <div class=\"section\">
                         <label for=\"username\" class=\"field prepend-icon\">
                            <input type=\"text\" name=\"login_id\" id=\"login\" disabled=\"disabled\" placeholder=\"Login\" value=\"";
            // line 706
            echo twig_escape_filter($this->env, $this->getAttribute($context["demande"], "statutUser", array()), "html", null, true);
            echo "\" >
                              <span class=\"error\">  </span>
                                 <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-lock\"></i>
                                  </label>
                          </label>
                     </div>          
             </td>   
            </tr>
            
            
            
         <!--   <tr>
                <td> <label> Sexe : </label> </td>
                <td> <input type=\"text\" name=\"getName\" id=\"getName\" value=\"";
            // line 720
            echo "\" disabled  /> </td>
            <td>              
            <select value=\"\" name=\"choixSexe\">
                <option value=\"null\">Selectionner Sexe</option>  
                <option value=\"Homme\" name=\"Homme\">Homme</option>
                <option value=\"Femmme\" name=\"Femmme\">Femmme</option>
            </select>
             </td>  
            </tr> !-->
            
             
            
            
           
           
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 736
        echo "            
       </table> <br>
          <!--onclick=\"myFunction()\"!-->                                       
        </form> 
                        
</div>              
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

 <!-- Start of fotter!-->
<div class=\"footer_widget\">
\t<div class=\"container\">
\t\t<div class=\"col-md-4\">
\t\t\t<aside id=\"text-1\" class=\"widget widget_text\">
\t\t\t\t<h3 class=\"widget-title\"><span>COME VISIT US</span></h3>
\t\t\t\t<div class=\"textwidget\"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
\t\t\t\t   <p><em style=\"color: #fff;\">standard chunk.,<br> Finibus Bonorum,<br> Ipsum generators, treatise</em></p>
\t\t\t\t</div> 
\t\t\t</aside>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<aside id=\"text-2\" class=\"widget widget_text\">
\t\t\t\t<h3 class=\"widget-title\"><span>MORE ABOUT US</span></h3>
\t\t\t\t<div class=\"textwidget\">
\t\t\t\t\t<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,.</p></div>
\t\t    </aside>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<aside>
\t\t\t\t<h3 class=\"widget-title\"><span>FLICKR FEED</span></h3>
\t\t\t\t<ul class=\"gallery\">
\t\t\t\t\t<li><a href=\"";
        // line 780
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 781
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"";
        // line 784
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 785
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"";
        // line 788
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 789
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t<a href=\"";
        // line 793
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 794
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 798
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 799
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic6.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t   <a href=\"";
        // line 803
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 804
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic5.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t    </li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 808
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 809
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic11.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t<a href=\"";
        // line 813
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" title=\"Rose\" rel=\"title1\">
\t\t\t\t\t\t<img src=\"";
        // line 814
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/pic12.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"name\">
\t\t\t\t\t   </a>
\t\t\t\t    </li>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</ul>
\t\t\t</aside>
\t\t</div>
\t</div>
</div>
<div class=\"footer_middle\">
\t<div class=\"container\">
        <div class=\"col-sm-7\">
          <div class=\"footer-icons\"> 
          \t<a href=\"https://twitter.com/?lang=en\" class=\"social-icon\"><i class=\"fa fa-twitter has-circle\"></i></a> 
          \t<a href=\"https://www.facebook.com\" class=\"social-icon\"><i class=\"fa fa-facebook has-circle\"></i></a> 
          \t<a href=\"https://www.google.tn/\" class=\"social-icon\"><i class=\"fa fa-google-plus has-circle\"></i></a> 
          \t<a href=\"https://www.linkedin.com/nhome/\" class=\"social-icon\"><i class=\"fa fa-linkedin has-circle\"></i></a> 
          \t<div class=\"clearfix\"> </div>
          </div>
        </div>
        <div class=\"col-sm-5\">
          <div class=\"newsletter_signup\">
            <form novalidate=\"\" target=\"_blank\" name=\"newsletter-subscribe-form\" id=\"newsletter-subscribe-form\" method=\"post\" class=\"form-inline validate\">
              <input type=\"email\" required=\"\" placeholder=\"Subscribe to our newsletter\" class=\"form-control\" name=\"EMAIL\" value=\"\">
              <input type=\"submit\" id=\"newsletter-subscribe\" name=\"subscribe\" value=\"SUBSCRIBE\">
            </form>
          </div>
        </div>
        <div class=\"clearfix\"> </div>
    </div>
</div>\t\t
<div class=\"footer_bottom\">
\t<div class=\"container\">
\t\t<div class=\"copy\">
            <p>Copyright © 2016 Community. All Rights Reserved | Design by <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
\t    </div>
\t</div>
    <!-- Start of Audio Player Code !-->
  <div id=\"backgroundaudio\">
       <i class=\"fa fa-volume-up\"></i>
    <audio autoplay=\"\" controls=\"\" loop=\"\" preload=\"\">
       <source src=\"";
        // line 855
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("audios/Smile.ogg"), "html", null, true);
        echo "\" type=\"audio/ogg\"></source>
       <source src=\"";
        // line 856
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("audios/Smile.mp3"), "html", null, true);
        echo "\" type=\"audio/mpeg\"></source>
        Your browser does not support the audio element.
    </audio>
  </div>      
        <!-- Style Audio Player !-->
<style media=\"screen\" type=\"text/css\">
 #backgroundaudio {
  display: block;
  position: fixed;
  bottom: -43px;
  left: 5px;
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
 }
 #backgroundaudio:hover {
  bottom: 0;
  -webkit-transition: all 1s ease-in-out;
  -moz-transition: all 1s ease-in-out;
  -ms-transition: all 1s ease-in-out;
  -o-transition: all 1s ease-in-out;
  transition: all 1s ease-in-out;
 }
 #backgroundaudio audio {
  background: #ffffff;
  padding: 5px;
  display: table-cell;
  vertical-align: middle;
  height: 43px;
  z-index: 9998;
 }
 #backgroundaudio i {
  font-size: 40px;
  display: block;
  background: #ffffff;
  padding: 5px;
  width: 50px;
  float: none;
  margin-bottom: -1px;
  z-index: 9999;
 }
</style>
  <!-- End Of Style Audio Player !-->
    <!-- End of Audio Player Code !-->
    
\t<a href=\"#\" id=\"toTop\" style=\"display: block;\"> <span id=\"toTopHover\" style=\"opacity: 1;\">Top </span></a>
      <script type=\"text/javascript\" src=\"";
        // line 904
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 905
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t/*
\t\t\tvar defaults = {
\t  \t\t\tcontainerID: 'toTop', // fading element id
\t\t\t\tcontainerHoverID: 'toTopHover', // fading element hover id
\t\t\t\tscrollSpeed: 1200,
\t\t\t\teasingType: 'linear' 
\t \t\t};
\t\t\t*/
\t\t\t
\t\t\t\$().UItoTop({ easingType: 'easeOutQuart' });
\t\t\t
\t\t});
\t  </script>
</div>\t
<!----language selector----->
<script type=\"text/javascript\" src=\"";
        // line 923
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.leanModal.min.js"), "html", null, true);
        echo "\"></script>
<link href=\"";
        // line 924
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.uls.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 925
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.uls.grid.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<link href=\"";
        // line 926
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.uls.lcd.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
<!-- Source -->
<script src=\"";
        // line 928
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.data.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 929
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.data.utils.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 930
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.lcd.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 931
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.languagefilter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 932
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.regionfilter.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 933
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.uls.core.js"), "html", null, true);
        echo "\"></script>
<script>
\t\$( document ).ready( function() {
\t\t\$( '.uls-trigger' ).uls( {
\t\t\tonSelect : function( language ) {
\t\t\t\tvar languageName = \$.uls.data.getAutonym( language );
\t\t\t\t\$( '.uls-trigger' ).text( languageName );
\t\t\t},
\t\t\tquickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
\t\t} );
\t} );
</script>\t\t
<!-- FlexSlider -->
<link href=\"";
        // line 946
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/flexslider.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
<script defer src=\"";
        // line 947
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.flexslider.js"), "html", null, true);
        echo "\"></script>
\t  <script type=\"text/javascript\">
\t\t\$(function(){
\t\t  SyntaxHighlighter.all();
\t\t});
\t\t\$(window).load(function(){
\t\t  \$('.flexslider').flexslider({
\t\t\tanimation: \"slide\",
\t\t\tstart: function(slider){
\t\t\t  \$('body').removeClass('loading');
\t\t\t}
\t\t  });
\t\t});
\t  </script>
<!-- FlexSlider -->\t
";
    }

    // line 84
    public function block_fless($context, array $blocks = array())
    {
        // line 85
        echo "\t\t\t<span class=\"menu\"></span>
\t\t\t<div class=\"top-menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\" class=\"btn btn-default btn-default_2 pull-left\" data-toggle=\"modal\" data-target=\"#applyModal\">Login</a></li>
\t\t\t\t\t ";
        // line 89
        $this->displayBlock('logout', $context, $blocks);
        // line 90
        echo "                                        <li><a href=\"";
        echo "\" class=\"btn btn-default btn-default_2 pull-left\" data-toggle=\"modal\" data-target=\"#applyModal_1\">Register</a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"btn btn-default btn-default_2 pull-left uls-trigger\" data-toggle=\"modal\" data-target=\"#applyModal_2\">Select Language</a></li>
                                       
                                </ul>
\t\t\t</div>
                        ";
    }

    // line 89
    public function block_logout($context, array $blocks = array())
    {
        echo " ";
    }

    // line 99
    public function block_Login($context, array $blocks = array())
    {
        // line 100
        echo "\t\t\t\t<div class=\"modal fade\" id=\"applyModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"applyModalLabel\" aria-hidden=\"true\">
\t\t\t\t  \t<div class=\"modal-dialog modal-dialog_2\">
\t\t\t\t    \t<div class=\"modal-content\">
\t\t\t\t\t      \t<div class=\"modal-header\">
\t\t\t\t\t        \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
\t\t\t\t\t        \t<h4 class=\"modal-title\" id=\"myModalLabel\">
\t\t\t\t\t        \t\t<div class=\"head_4\">
\t\t\t                          <p>Login</p>
\t\t\t                        </div>
\t\t\t                    </h4>
\t\t\t\t\t      \t</div>
\t                        <div class=\"modal-body\">
                                    
                        <form class=\"register\" method=\"post\" action=\"";
        // line 113
        echo "\">
                               <div class=\"section\">
                                <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"username_id\" id=\"usr\" placeholder=\"Username\">
                                    <span class=\"error\">  </span>
                                    <label for=\"username_id\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                    </label>
                                </label>
                               </div>
                               <div class=\"section\"> 
                                <label for=\"password\" class=\"field prepend-icon\">
                                    <input type=\"password\" name=\"password_id\" id=\"pass\" placeholder=\"Password\">
                                    <span class=\"error\">  </span>
                                    <label for=\"password_id\" class=\"field-icon\">
                                        <i class=\"fa fa-lock\"></i>
                                    </label>
                                </label>
                             </div>
                           <!--  <div class=\"section\"> 
                                <label for=\"id\" class=\"field prepend-icon\"> !-->
                                 <!--   <input type=\"text\" name=\"id_\" id=\"numId\" placeholder=\"getId\" hidden> !-->
                                  <!--  <span class=\"error\">  </span>
                                    <label for=\"id_\" class=\"field-icon\">
                                        <i class=\"fa fa-lock\"></i>
                                    </label> !-->
                                </label>
                             </div>
                             <div class=\"section\">
                                <div class=\"submit\"><input type=\"submit\"  value=\"Login\" name=\"submit\"  onclick=\"validationlogin()\"></div> <!-- onclick=\"myFunction()\" !-->
                             </div>
                             <div class=\"section\">
                                   <div class=\"submit\"><input type=\"reset\" value=\"Reset\" name=\"submit\" class=\"btn btn-warning btn-lg btn-block\" ></div>
                             </div>
                            <span class=\"error\" name=\"errorLogin\">  </span>
                             <ul class=\"new\">
\t\t\t\t\t\t\t\t<li class=\"new_left\"><p><a href=\"#\">Forgot Password ?</a></p></li>
\t\t\t\t\t\t\t\t<li class=\"new_right\"><p class=\"sign\">New here ?&nbsp;&nbsp;<a href=\"#\" data-toggle=\"modal\" data-target=\"#applyModal_1\">Sign Up</a></p></li>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t     </ul>
                           </form>
                        </div>
\t\t\t\t    </div>
\t\t\t\t </div>
\t\t\t\t</div>
                           ";
    }

    // line 163
    public function block_Register($context, array $blocks = array())
    {
        // line 164
        echo "\t\t\t\t<div class=\"modal fade\" id=\"applyModal_1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"applyModalLabel\" aria-hidden=\"true\">
\t\t\t\t  \t<div class=\"modal-dialog dialog_3\">
\t\t\t\t    \t<div class=\"modal-content\">
\t\t\t\t\t      \t<div class=\"modal-header\">
\t\t\t\t\t        \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
\t\t\t\t\t        \t<h4 class=\"modal-title\" id=\"myModalLabel\"><div class=\"head_4\">
\t\t\t                         <p>Register</p>
\t\t\t                        </div></h4>
\t\t\t\t\t      \t</div>
\t\t\t\t\t<form name=\"row\" method=\"post\" class=\"register\" action=\"";
        // line 173
        echo "\">
\t\t\t\t\t      \t      <!-- <div class=\"radio radio_1\">
\t\t\t\t\t\t\t\t\t<input id=\"leader\" type=\"radio\" value=\"1\">
\t\t\t\t\t\t\t\t\t<label for=\"leader\">Leader</label>
\t\t\t\t\t\t\t\t\t<input id=\"company\" type=\"radio\" value=\"2\">
\t\t\t\t\t\t\t\t\t<label for=\"company\">Company</label>
\t\t\t\t\t\t\t\t\t<input id=\"trainer\" type=\"radio\" value=\"3\">
\t\t\t\t\t\t\t\t\t<label for=\"trainer\">Trainer</label>
\t\t\t\t\t\t\t\t\t<input id=\"software developer\" type=\"radio\" value=\"4\">
\t\t\t\t\t\t\t\t\t<label for=\"software developer\">Software Developer</label>
\t\t\t\t\t\t\t\t\t<input id=\"product supplier\" type=\"radio\" value=\"5\">
\t\t\t\t\t\t\t\t\t<label for=\"product supplier\">Product Supplier</label>
\t\t\t\t\t\t\t\t\t<input id=\"consultant\" type=\"radio\" value=\"6\">
\t\t\t\t\t\t\t\t\t<label for=\"consultant\">Consultant</label>
\t\t\t\t\t\t\t\t\t<input id=\"employee\" type=\"radio\" value=\"7\">
\t\t\t\t\t\t\t\t\t<label for=\"employee\">Employee</label>
\t                                             </div> !-->
                                                    
                                   <div class=\"section\">
                                   <label for=\"nom\" class=\"field prepend-icon\">
                                       <input type=\"text\" name=\"nom_id\" id=\"nom\" placeholder=\"Nom\" required onkeyup=\"verif_text()\">
                                    <span class=\"error\">  </span>
                                    <label for=\"nom_id\" class=\"field-icon\">
                                    <i class=\"fa fa-users\"></i>
                                    </label>  
                                  </label>
                                   <div id=\"img_nom\"></div>
                               </div>
                                                    
                                   <div class=\"section\">
                                  <label for=\"prnm\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"prnm_id\" id=\"prenom\" placeholder=\"Prénom\">
                                    <span class=\"error\">  </span>
                                    <label for=\"prnm_id\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                    </label>
                                  </label>
                               </div>    
                                                     
                                  <div class=\"section\">
                                  <label for=\"address\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"address_id\" id=\"addresse\" placeholder=\"Addresse\">
                                    <span class=\"error\">  </span>
                                    <label for=\"address_id\" class=\"field-icon\">
                                        <i class=\"fa fa-home\"></i>
                                    </label>
                                  </label>
                               </div>      
                                                      
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"email_id\" id=\"email\" placeholder=\"Email\">
                                    <span class=\"error\">  </span>
                                    <label for=\"email_id\" class=\"field-icon\">
                                        <i class=\"fa fa-envelope\"></i>
                                    </label>
                                  </label>
                               </div>                   
                                     
                                  <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"mobile_number\" id=\"tel\" placeholder=\"Mobile Number\">
                                    <span class=\"error\">  </span>
                                    <label for=\"mobile_number\" class=\"field-icon\">
                                        <i class=\"fa fa-phone\"></i>
                                    </label>
                                  </label>
                               </div>                  
                                      
                                    <div class=\"section\">
                                  <label for=\"name\" class=\"field prepend-icon\">
                                     <select path=\"country\" id=\"country\" class=\"form-control input-sm\" name=\"statut\">
                                        <option value=\"null\">Selectionner Statut</option>
                                        <option value=\"Particulier\" name=\"Particulier\">Particulier</option>
                                        <option value=\"Entreprise\"  name=\"Entreprise\">Entreprise</option>
                                     </select>
                                     <label for=\"name\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                     </label>
                                  </label>
                               </div>
                                                    
\t                      
                                                    
                                <div class=\"section\">
                                  <label for=\"username\" class=\"field prepend-icon\">
                                    <input type=\"text\" name=\"login_id\" id=\"login\" placeholder=\"Login\">
                                    <span class=\"error\">  </span>
                                    <label for=\"login_id\" class=\"field-icon\">
                                        <i class=\"fa fa-lock\"></i>
                                    </label>
                                  </label>
                               </div>                          
                                                      
                               <div class=\"section\">
                                 <label for=\"password\" class=\"field prepend-icon\">
                                    <input type=\"password\" name=\"password\" id=\"pwd\" placeholder=\"Password\">
                                    <span class=\"error\">  </span>
                                    <label for=\"password\" class=\"field-icon\">
                                        <i class=\"fa fa-lock\"></i>
                                    </label>
                                 </label>
                               </div>
                               
                               <div class=\"radio radio_1\" id=\"sexe\">
                                  <h4>Choisir Votre Sexe SVP : </h4>  <br>
\t\t\t\t    <input id=\"homme\" type=\"radio\" value=\"Homme\" name=\"choixSexe\">
\t\t\t\t\t <label for=\"homme\" >Homme                                         
                                            <i class=\"fa fa-male\"></i>
                                          </label>
\t\t\t\t    <input id=\"femme\" type=\"radio\" value=\"Femme\" name=\"choixSexe\">
\t\t\t\t\t <label for=\"femme\" >Femme
                                            <i class=\"fa fa-female\"></i>
                                          </label>
\t                            </div>                     
                                                    
                             <!--  <div class=\"section\">
                                  <label for=\"name\" class=\"field prepend-icon\">
                                    <select path=\"country\" id=\"country\" class=\"form-control input-sm\">
\t\t\t\t                        <option value=\"\">Select Country</option>
                                                        <option value=\"\">Tunisia</option>
\t\t\t\t                        <option value=\"\">Japan</option>
\t\t\t\t                        <option value=\"\">Kenya</option>
\t\t\t\t                        <option value=\"\">Dubai</option>
\t\t\t\t                        <option value=\"\">Italy</option>
\t\t\t\t                        <option value=\"\">Greece</option> 
\t\t\t\t                        <option value=\"\">Iceland</option> 
\t\t\t\t                        <option value=\"\">China</option> 
\t\t\t\t                        <option value=\"\">Doha</option> 
\t\t\t\t                        <option value=\"\">Irland</option> 
\t\t\t\t                        <option value=\"\">Srilanka</option> 
\t\t\t\t                        <option value=\"\">Russia</option> 
\t\t\t\t                        <option value=\"\">Hong Kong</option> 
\t\t\t\t                        <option value=\"\">Germany</option>
\t\t\t\t                        <option value=\"\">Canada</option>  
\t\t\t\t                        <option value=\"\">Mexico</option> 
\t\t\t\t                        <option value=\"\">Nepal</option>
\t\t\t\t                        <option value=\"\">Norway</option> 
\t\t\t\t                        <option value=\"\">Oman</option>
\t\t\t\t                        <option value=\"\">Pakistan</option>  
\t\t\t\t                        <option value=\"\">Kuwait</option> 
\t\t\t\t                        <option value=\"\">Indonesia</option>  
\t\t\t\t                        <option value=\"\">Spain</option>
\t\t\t\t                        <option value=\"\">Thailand</option>  
\t\t\t\t                        <option value=\"\">Saudi Arabia</option> 
\t\t\t\t                        <option value=\"\">Poland</option> 
\t\t\t\t                    </select>
                                    <label for=\"name\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                    </label>
                                  </label>
                               </div> 
                              
                               <div class=\"section\">
                                  <label for=\"name\" class=\"field prepend-icon\">
                                      <select path=\"country\" id=\"country\" class=\"form-control input-sm\">
                                         <option value=\"\">Select City</option>
                                      </select>
                                      <label for=\"name\" class=\"field-icon\">
                                        <i class=\"fa fa-user\"></i>
                                      </label>
                                  </label>
                               </div> !-->
                             
                               <div class=\"section\">
                                   <div class=\"submit\"><input type=\"submit\" value=\"Register\" name=\"submit\" onclick=\"validation()\" class=\"btn btn-info btn-lg btn-block\"  >   <!--onclick=\"myFunction()\"!-->
                                                      
                                   </div>
                               </div>
                                 <div class=\"section\">
                                   <div class=\"submit\"><input type=\"reset\" value=\"Reset\" name=\"submit\" class=\"btn btn-warning btn-lg btn-block\" ></div>
                               </div>
                               <div class=\"checkbox check_1\">
\t\t\t\t\t<input id=\"check1\" type=\"checkbox\" name=\"check\" value=\"check1\">
\t\t\t\t\t<label for=\"check1\">I agree to the Terms of Service and Privacy Policy</label>
\t\t\t\t</div>
                              
\t\t\t\t\t\t  </form>
                                        ";
    }

    // line 416
    public function block_tabs($context, array $blocks = array())
    {
        // line 417
        echo "    <div class=\"collapse navbar-collapse\" id=\"bs-megadropdown-tabs\">
        <ul class=\"nav navbar-nav nav_1\">
            <li class=\"current_page\"><a href=\"";
        // line 419
        echo $this->env->getExtension('routing')->getPath("acceuil_demande");
        echo "\">Home</a></li>
            
    \t\t
\t\t\t<li><a href=\"";
        // line 422
        echo $this->env->getExtension('routing')->getPath("liste_demande");
        echo "\">Demandes Services</a></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Espace personnel<span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu drop_menu\" role=\"menu\">
                <li><a href=\"news.html\">News</a></li>
                <li><a href=\"";
        // line 427
        echo $this->env->getExtension('routing')->getPath("ajouter_demande");
        echo "\">Ajouter une demande</a></li>
                <li><a href=\"";
        // line 428
        echo $this->env->getExtension('routing')->getPath("liste_demande_personnel");
        echo "\">Afficher mes demandes</a></li>
                
              </ul>
            </li>
            
            <li><a href=\"forum.html\">Forum</a></li>
            
                ";
        // line 435
        $this->displayBlock('compteUser', $context, $blocks);
        // line 437
        echo "        </ul>
        <div class=\"help_line\"><div id=\"txtblnk\"><p>HELP LINE : (+216)54 559 441</p></div></div>
     </div><!-- /.navbar-collapse -->
     ";
    }

    // line 435
    public function block_compteUser($context, array $blocks = array())
    {
        // line 436
        echo "                   ";
    }

    public function getTemplateName()
    {
        return "EspritDemandeBundle:Demande:user.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1329 => 436,  1326 => 435,  1319 => 437,  1317 => 435,  1307 => 428,  1303 => 427,  1295 => 422,  1289 => 419,  1285 => 417,  1282 => 416,  1100 => 173,  1089 => 164,  1086 => 163,  1037 => 113,  1022 => 100,  1019 => 99,  1013 => 89,  1003 => 90,  1001 => 89,  995 => 85,  992 => 84,  972 => 947,  968 => 946,  952 => 933,  948 => 932,  944 => 931,  940 => 930,  936 => 929,  932 => 928,  927 => 926,  923 => 925,  919 => 924,  915 => 923,  894 => 905,  890 => 904,  839 => 856,  835 => 855,  791 => 814,  787 => 813,  780 => 809,  776 => 808,  769 => 804,  765 => 803,  758 => 799,  754 => 798,  747 => 794,  743 => 793,  736 => 789,  732 => 788,  726 => 785,  722 => 784,  716 => 781,  712 => 780,  666 => 736,  645 => 720,  628 => 706,  618 => 698,  601 => 683,  583 => 667,  574 => 660,  565 => 653,  550 => 641,  540 => 633,  525 => 621,  515 => 613,  501 => 601,  483 => 586,  473 => 578,  458 => 566,  445 => 555,  441 => 554,  412 => 527,  393 => 514,  387 => 511,  381 => 508,  375 => 505,  369 => 502,  359 => 495,  355 => 493,  352 => 492,  347 => 491,  345 => 490,  294 => 441,  292 => 416,  225 => 351,  223 => 163,  217 => 159,  215 => 99,  210 => 96,  208 => 84,  195 => 73,  187 => 69,  160 => 41,  157 => 40,  150 => 36,  146 => 35,  140 => 32,  135 => 30,  131 => 29,  126 => 27,  122 => 26,  118 => 25,  112 => 22,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  89 => 14,  85 => 13,  74 => 6,  69 => 64,  67 => 40,  64 => 39,  59 => 6,  53 => 963,  51 => 69,  46 => 66,  44 => 6,  40 => 4,  34 => 3,  30 => 1,);
    }
}
/* */
/* */
/* {% block html %}*/
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>{% block head %} {% block stylesheet %}                 */
/* <title>Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Home :: w3layouts</title>*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/* <meta name="keywords" content="Community Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, */
/* Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />*/
/* <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>*/
/* <link href="{{asset('css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' type='text/css' />*/
/* <link href="{{asset('css/bootstrap1.min.css')}}" rel='stylesheet' type='text/css' />*/
/* */
/* <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/* <script src="{{asset('js/jquery.min.js')}}"></script>*/
/* <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>*/
/* <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/* <script src="{{asset('js/bootstrap1.min.js')}}"></script>*/
/* <!-- Custom Theme files -->*/
/* <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />*/
/* */
/* <!--webfont-->*/
/* <link href='{{asset('//fonts.googleapis.com/css?family=Oswald:300,400,700')}}' rel='stylesheet' type='text/css'>*/
/* <link href='{{asset('//fonts.googleapis.com/css?family=PT+Sans:400,700')}}' rel='stylesheet' type='text/css'>*/
/* <link href='{{asset('//fonts.googleapis.com/css?family=Fugaz+One')}}' rel='stylesheet' type='text/css'>*/
/* <!-- Owl Stylesheets -->*/
/* <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>*/
/* <!----font-Awesome----->*/
/* <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> */
/* <!----font-Awesome----->*/
/* <!--light-box-files -->*/
/* <script src="{{asset('js/jquery.chocolat.js')}}"></script>*/
/* <link rel="stylesheet" href="{{asset('css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8" />*/
/* <!--light-box-files -->*/
/*      {% endblock %}*/
/* <!----drop down----->*/
/* {% block javascripts %}*/
/* <script>*/
/* $(document).ready(function(){*/
/*     $(".dropdown").hover(            */
/*         function() {*/
/*             $('.dropdown-menu', this).stop( true, true ).slideDown("fast");*/
/*             $(this).toggleClass('open');        */
/*         },*/
/*         function() {*/
/*             $('.dropdown-menu', this).stop( true, true ).slideUp("fast");*/
/*             $(this).toggleClass('open');       */
/*         }*/
/*     );*/
/* });*/
/* </script>*/
/* */
/* <script type="text/javascript" charset="utf-8">*/
/* $(function() {*/
/* 	$('.gallery a').Chocolat();*/
/* });*/
/* </script>*/
/* */
/* */
/* */
/* {% endblock %} */
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*          */
/*         {% block content %} */
/*         <div class="header">*/
/* 		<div class="container">*/
/* 			<div class="col-sm-3 logo">*/
/*                             <h1><a href="{#{ path("pidev_all_for_deal_home") }#}"><span class="highlight">A</span>ll<span class="highlight">F</span>or<span class="highlight">D</span>eal</a></h1>*/
/* 			</div>*/
/* 		    <div class="col-sm-9 logo_right">*/
/* 		       <div class="social">*/
/* 				  <a href="https://www.facebook.com" class="link facebook" target="_parent"><span class="fa fa-facebook"></span></a>*/
/* 				  <a href="https://twitter.com/?lang=en" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>*/
/* 				  <a href="https://www.google.tn/" class="link google" target="_parent"><span class="fa fa-google-plus"></span></a>*/
/* 				  <a href="https://www.linkedin.com/nhome/" class="link google" target="_parent"><span class="fa fa-linkedin"></span></a>*/
/* 				  <a href="https://www.google.tn/" class="link google" target="_parent"><span class="fa fa-tumblr"></span></a>    */
/*                     </div>*/
/* 			<!-- script for menu -->*/
/*                         {% block fless %}*/
/* 			<span class="menu"></span>*/
/* 			<div class="top-menu">*/
/* 				<ul>*/
/* 					<li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal">Login</a></li>*/
/* 					 {% block logout %} {% endblock %}*/
/*                                         <li><a href="{#{path("pidev_all_for_deal_InscriptionUser")}#}" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_1">Register</a></li>*/
/* 					<li><a href="#" class="btn btn-default btn-default_2 pull-left uls-trigger" data-toggle="modal" data-target="#applyModal_2">Select Language</a></li>*/
/*                                        */
/*                                 </ul>*/
/* 			</div>*/
/*                         {% endblock %}*/
/* 			<div class="clearfix"> </div>*/
/* 			<!-- Modal -->*/
/*                            <!-- Start Login !-->*/
/*                            {% block Login %}*/
/* 				<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">*/
/* 				  	<div class="modal-dialog modal-dialog_2">*/
/* 				    	<div class="modal-content">*/
/* 					      	<div class="modal-header">*/
/* 					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/* 					        	<h4 class="modal-title" id="myModalLabel">*/
/* 					        		<div class="head_4">*/
/* 			                          <p>Login</p>*/
/* 			                        </div>*/
/* 			                    </h4>*/
/* 					      	</div>*/
/* 	                        <div class="modal-body">*/
/*                                     */
/*                         <form class="register" method="post" action="{#{ path("pidev_all_for_deal_LoginUser") }#}">*/
/*                                <div class="section">*/
/*                                 <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="username_id" id="usr" placeholder="Username">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="username_id" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                     </label>*/
/*                                 </label>*/
/*                                </div>*/
/*                                <div class="section"> */
/*                                 <label for="password" class="field prepend-icon">*/
/*                                     <input type="password" name="password_id" id="pass" placeholder="Password">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="password_id" class="field-icon">*/
/*                                         <i class="fa fa-lock"></i>*/
/*                                     </label>*/
/*                                 </label>*/
/*                              </div>*/
/*                            <!--  <div class="section"> */
/*                                 <label for="id" class="field prepend-icon"> !-->*/
/*                                  <!--   <input type="text" name="id_" id="numId" placeholder="getId" hidden> !-->*/
/*                                   <!--  <span class="error">  </span>*/
/*                                     <label for="id_" class="field-icon">*/
/*                                         <i class="fa fa-lock"></i>*/
/*                                     </label> !-->*/
/*                                 </label>*/
/*                              </div>*/
/*                              <div class="section">*/
/*                                 <div class="submit"><input type="submit"  value="Login" name="submit"  onclick="validationlogin()"></div> <!-- onclick="myFunction()" !-->*/
/*                              </div>*/
/*                              <div class="section">*/
/*                                    <div class="submit"><input type="reset" value="Reset" name="submit" class="btn btn-warning btn-lg btn-block" ></div>*/
/*                              </div>*/
/*                             <span class="error" name="errorLogin">  </span>*/
/*                              <ul class="new">*/
/* 								<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>*/
/* 								<li class="new_right"><p class="sign">New here ?&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#applyModal_1">Sign Up</a></p></li>*/
/* 								<div class="clearfix"></div>*/
/* 						     </ul>*/
/*                            </form>*/
/*                         </div>*/
/* 				    </div>*/
/* 				 </div>*/
/* 				</div>*/
/*                            {% endblock %}*/
/*                            <!-- End Login !-->*/
/*                            */
/* 				 <!-- Modal -->*/
/*                <!-- Start Registration !-->     */
/*                                  {% block Register %}*/
/* 				<div class="modal fade" id="applyModal_1" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">*/
/* 				  	<div class="modal-dialog dialog_3">*/
/* 				    	<div class="modal-content">*/
/* 					      	<div class="modal-header">*/
/* 					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>*/
/* 					        	<h4 class="modal-title" id="myModalLabel"><div class="head_4">*/
/* 			                         <p>Register</p>*/
/* 			                        </div></h4>*/
/* 					      	</div>*/
/* 					<form name="row" method="post" class="register" action="{#{ path("pidev_all_for_deal_InscriptionUser") }#}">*/
/* 					      	      <!-- <div class="radio radio_1">*/
/* 									<input id="leader" type="radio" value="1">*/
/* 									<label for="leader">Leader</label>*/
/* 									<input id="company" type="radio" value="2">*/
/* 									<label for="company">Company</label>*/
/* 									<input id="trainer" type="radio" value="3">*/
/* 									<label for="trainer">Trainer</label>*/
/* 									<input id="software developer" type="radio" value="4">*/
/* 									<label for="software developer">Software Developer</label>*/
/* 									<input id="product supplier" type="radio" value="5">*/
/* 									<label for="product supplier">Product Supplier</label>*/
/* 									<input id="consultant" type="radio" value="6">*/
/* 									<label for="consultant">Consultant</label>*/
/* 									<input id="employee" type="radio" value="7">*/
/* 									<label for="employee">Employee</label>*/
/* 	                                             </div> !-->*/
/*                                                     */
/*                                    <div class="section">*/
/*                                    <label for="nom" class="field prepend-icon">*/
/*                                        <input type="text" name="nom_id" id="nom" placeholder="Nom" required onkeyup="verif_text()">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="nom_id" class="field-icon">*/
/*                                     <i class="fa fa-users"></i>*/
/*                                     </label>  */
/*                                   </label>*/
/*                                    <div id="img_nom"></div>*/
/*                                </div>*/
/*                                                     */
/*                                    <div class="section">*/
/*                                   <label for="prnm" class="field prepend-icon">*/
/*                                     <input type="text" name="prnm_id" id="prenom" placeholder="Prénom">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="prnm_id" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                                </div>    */
/*                                                      */
/*                                   <div class="section">*/
/*                                   <label for="address" class="field prepend-icon">*/
/*                                     <input type="text" name="address_id" id="addresse" placeholder="Addresse">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="address_id" class="field-icon">*/
/*                                         <i class="fa fa-home"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                                </div>      */
/*                                                       */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="email_id" id="email" placeholder="Email">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="email_id" class="field-icon">*/
/*                                         <i class="fa fa-envelope"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                                </div>                   */
/*                                      */
/*                                   <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="mobile_number" id="tel" placeholder="Mobile Number">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="mobile_number" class="field-icon">*/
/*                                         <i class="fa fa-phone"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                                </div>                  */
/*                                       */
/*                                     <div class="section">*/
/*                                   <label for="name" class="field prepend-icon">*/
/*                                      <select path="country" id="country" class="form-control input-sm" name="statut">*/
/*                                         <option value="null">Selectionner Statut</option>*/
/*                                         <option value="Particulier" name="Particulier">Particulier</option>*/
/*                                         <option value="Entreprise"  name="Entreprise">Entreprise</option>*/
/*                                      </select>*/
/*                                      <label for="name" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                      </label>*/
/*                                   </label>*/
/*                                </div>*/
/*                                                     */
/* 	                      */
/*                                                     */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="login_id" id="login" placeholder="Login">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-lock"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                                </div>                          */
/*                                                       */
/*                                <div class="section">*/
/*                                  <label for="password" class="field prepend-icon">*/
/*                                     <input type="password" name="password" id="pwd" placeholder="Password">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="password" class="field-icon">*/
/*                                         <i class="fa fa-lock"></i>*/
/*                                     </label>*/
/*                                  </label>*/
/*                                </div>*/
/*                                */
/*                                <div class="radio radio_1" id="sexe">*/
/*                                   <h4>Choisir Votre Sexe SVP : </h4>  <br>*/
/* 				    <input id="homme" type="radio" value="Homme" name="choixSexe">*/
/* 					 <label for="homme" >Homme                                         */
/*                                             <i class="fa fa-male"></i>*/
/*                                           </label>*/
/* 				    <input id="femme" type="radio" value="Femme" name="choixSexe">*/
/* 					 <label for="femme" >Femme*/
/*                                             <i class="fa fa-female"></i>*/
/*                                           </label>*/
/* 	                            </div>                     */
/*                                                     */
/*                              <!--  <div class="section">*/
/*                                   <label for="name" class="field prepend-icon">*/
/*                                     <select path="country" id="country" class="form-control input-sm">*/
/* 				                        <option value="">Select Country</option>*/
/*                                                         <option value="">Tunisia</option>*/
/* 				                        <option value="">Japan</option>*/
/* 				                        <option value="">Kenya</option>*/
/* 				                        <option value="">Dubai</option>*/
/* 				                        <option value="">Italy</option>*/
/* 				                        <option value="">Greece</option> */
/* 				                        <option value="">Iceland</option> */
/* 				                        <option value="">China</option> */
/* 				                        <option value="">Doha</option> */
/* 				                        <option value="">Irland</option> */
/* 				                        <option value="">Srilanka</option> */
/* 				                        <option value="">Russia</option> */
/* 				                        <option value="">Hong Kong</option> */
/* 				                        <option value="">Germany</option>*/
/* 				                        <option value="">Canada</option>  */
/* 				                        <option value="">Mexico</option> */
/* 				                        <option value="">Nepal</option>*/
/* 				                        <option value="">Norway</option> */
/* 				                        <option value="">Oman</option>*/
/* 				                        <option value="">Pakistan</option>  */
/* 				                        <option value="">Kuwait</option> */
/* 				                        <option value="">Indonesia</option>  */
/* 				                        <option value="">Spain</option>*/
/* 				                        <option value="">Thailand</option>  */
/* 				                        <option value="">Saudi Arabia</option> */
/* 				                        <option value="">Poland</option> */
/* 				                    </select>*/
/*                                     <label for="name" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                                </div> */
/*                               */
/*                                <div class="section">*/
/*                                   <label for="name" class="field prepend-icon">*/
/*                                       <select path="country" id="country" class="form-control input-sm">*/
/*                                          <option value="">Select City</option>*/
/*                                       </select>*/
/*                                       <label for="name" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                       </label>*/
/*                                   </label>*/
/*                                </div> !-->*/
/*                              */
/*                                <div class="section">*/
/*                                    <div class="submit"><input type="submit" value="Register" name="submit" onclick="validation()" class="btn btn-info btn-lg btn-block"  >   <!--onclick="myFunction()"!-->*/
/*                                                       */
/*                                    </div>*/
/*                                </div>*/
/*                                  <div class="section">*/
/*                                    <div class="submit"><input type="reset" value="Reset" name="submit" class="btn btn-warning btn-lg btn-block" ></div>*/
/*                                </div>*/
/*                                <div class="checkbox check_1">*/
/* 					<input id="check1" type="checkbox" name="check" value="check1">*/
/* 					<label for="check1">I agree to the Terms of Service and Privacy Policy</label>*/
/* 				</div>*/
/*                               */
/* 						  </form>*/
/*                                         {% endblock %}     */
/*                 <!-- End Registration !-->    */
/*                      </div>*/
/* 		         </div>*/
/* 		     </div>*/
/* 			 <div class="modal fade" id="applyModal_2" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">*/
/* 				<div class="modal-dialog">*/
/* 					<div class="modal-content">*/
/* 						<div class="modal-header">*/
/* 							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">*/
/* 								&times;</button>*/
/* 							<h4 class="modal-title" id="myModalLabel">*/
/* 								Please Choose Your Location</h4>*/
/* 						</div>*/
/* 						<div class="modal-body">*/
/* 							 <form class="form-horizontal" role="form">*/
/* 								<div class="form-group">*/
/* 									<select id="basic2" class="show-tick form-control" multiple>*/
/* 										<optgroup label="Popular Cities">*/
/* 											<option selected style="display:none;color:#eee;">All India</option>*/
/* 											<option>Ahmedabad</option>*/
/* 											<option>Bangalore</option>*/
/* 											<option>Chandigarh</option>*/
/* 											<option>Chennai</option>*/
/* 											<option>Coimbatore</option>*/
/* 											<option>Delhi</option>*/
/* 											<option>Gurgaon</option>*/
/* 											<option>Hyderabad</option>*/
/* 											<option>Jaipur</option>*/
/* 											<option>Kochi</option>*/
/* 											<option>Kolkata</option>*/
/* 											<option>Lucknow</option>*/
/* 											<option>Mumbai</option>*/
/* 											<option>Noida</option>*/
/* 										</optgroup>*/
/* 											<optgroup label="More Cities">*/
/* 											<optgroup label="Andhra Pradesh">*/
/* 											<option>Anantapur</option>*/
/* 											<option>Chinnamandem</option>*/
/* 											<option>Gudur</option><option>Guntur</option><option>Jangareddy Gudem</option><option>Kakinada</option><option>Kurnool</option><option>Martur</option><option>Parvathipuram</option><option>Rajahmundry</option><option>Tenali</option><option>Tirupati</option><option>Vijayawada</option><option>Vizag</option><option>Vizianagaram</option></optgroup><optgroup label="Arunachal Pradesh"><option>Tawang</option><option>Ziro</option></optgroup><optgroup label="Assam"><option>Dibrugarh</option><option>Guwahati</option><option>Jorhat</option><option>Silchar</option><option>Tinsukia</option></optgroup><optgroup label="Bihar"><option>Hajipur</option><option>Patna</option></optgroup><optgroup label="Chhattisgarh"><option>Bhilai</option><option>Bilaspur</option><option>Champa</option><option>Dhamtari</option><option>Durg</option><option>Jagdalpur</option><option>Kawardha</option><option>Kondagaon</option><option>Korba</option><option>Raigarh</option><option>Raipur</option><option>Tilda Neora</option></optgroup><optgroup label="Croatia"><option>Dubrovnik</option></optgroup><optgroup label="Goa"><option>Goa</option></optgroup><optgroup label="Gujarat"><option>Adipur</option><option>Ahmedabad</option><option>Anand</option><option>Ankleshwar</option><option>Bharuch</option><option>Bhavnagar</option><option>Daman</option><option>Gandhidham</option><option>Gandhinagar</option><option>Himmatnagar</option><option>Idar</option><option>Jamnagar</option><option>Jetpur</option><option>Junagadh</option><option>Kutch</option><option>Nadiad</option><option>Navsari</option><option value="PALN">Palanpur</option><option value="PATA">Patan</option><option value="RAJK">Rajkot</option><option value="SANA">Sanand</option><option value="SILV">Silvassa</option><option value="SURT">Surat</option><option value="VAD">Vadodara</option><option value="VLSD">Valsad</option><option value="VAPI">Vapi</option></optgroup><optgroup label="Haryana"><option value="AMB">Ambala</option><option value="DHRA">Dharuhera</option><option value="FARI">Faridabad</option><option value="HISR">Hisar</option><option value="JHAJ">Jhajjar</option><option value="JIND">Jind</option><option value="KAIT">Kaithal</option><option value="KARN">Karnal</option><option value="KUND">Kundli</option><option value="KURU">Kurukshetra</option><option value="PNCH">Panchkula</option><option value="PAN">Panipat</option><option value="REWA">Rewari</option><option value="ROH">Rohtak</option><option value="SISA">Sirsa</option><option value="RAIH">Sonipat</option><option value="YAMU">Yamunanagar</option></optgroup><optgroup label="Himachal Pradesh"><option value="BADD">Baddi</option><option value="DMSL">Dharamsala</option><option value="HAMI">Hamirpur (HP)</option><option value="KANG">Kangra</option><option value="KULU">Kullu</option><option value="MANA">Manali</option><option value="SMLA">Shimla</option><option value="SCO">Solan</option></optgroup><optgroup label="Jammu and Kashmir"><option value="JAMM">Jammu</option><option value="KATH">Kathua</option><option value="KATR">Katra</option><option value="LEHA">Ladakh</option></optgroup><optgroup label="Jharkhand"><option value="BOKA">Bokaro</option><option value="DOGH">Deoghar</option><option value="DHAN">Dhanbad(Jharkhand)</option><option value="JMDP">Jamshedpur</option><option value="RANC">Ranchi</option></optgroup><optgroup label="Karnataka"><option value="BELG">Belgaum</option><option value="BANG">Bengaluru</option><option value="BIDR">Bidar</option><option value="COOR">Coorg</option><option value="DAVA">Davangere</option><option value="GULB">Gulbarga</option><option value="HUBL">Hubli</option><option value="KWAR">Karwar</option><option value="MLR">Mangalore</option><option value="MANI">Manipal</option><option value="MYS">Mysore</option><option value="TUMK">Tumkur</option><option value="UDUP">Udupi</option></optgroup><optgroup label="Kerala"><option value="99">Alappuzha</option><option value="ANHL">Anchal</option><option value="ANGA">Angamaly</option><option value="ERNK">Ernakulam</option><option value="KANN">Kannur</option><option value="KARG">Karunagapally</option><option value="KOCH">Kochi</option><option value="KOLM">Kollam</option><option value="KTYM">Kottayam</option><option value="MVLR">Mavellikara</option><option value="THAL">Thalayolaparambu</option><option value="THSR">Thrissur</option><option value="TRIV">Trivandrum</option></optgroup><optgroup label="Madhya Pradesh"><option value="BLGT">Balaghat</option><option value="BETU">Betul</option><option value="BHOP">Bhopal</option><option value="CHIN">Chhindwara</option><option value="DEWAS">Dewas</option><option value="GWAL">Gwalior</option><option value="HRDA">Harda</option><option value="IND">Indore</option><option value="JABL">Jabalpur</option><option value="KHDW">Khandwa</option><option value="NMCH">Neemuch</option><option value="RATL">Ratlam</option><option value="SAMP">Sagar</option><option value="SARN">Sarni</option><option value="SEHO">Sehore</option><option value="SEON">Seoni</option><option value="SHIV">Shivpuri</option><option value="UJJN">Ujjain</option></optgroup><optgroup label="Maharashtra"><option value="AHMED">Ahmednagar</option><option value="AKOL">Akola</option><option value="ALBG">Alibaug</option><option value="AMRA">Amravati</option><option value="AURA">Aurangabad</option><option value="BARA">Baramati</option><option value="BEED">Beed</option><option value="BHIW">Bhiwandi</option><option value="BOIS">Boisar</option><option value="BULD">Buldana</option><option value="CHAN">Chandrapur</option><option value="DHLE">Dhule</option><option value="DHUL">Dhulia</option><option value="INDA">Indapur</option><option value="JALG">Jalgaon</option><option value="KHED">Khed</option><option value="KHOP">Khopoli</option><option value="KOLH">Kolhapur</option><option value="LAT">Latur</option><option value="LAVA">Lavasa</option><option value="LNVL">Lonavala</option><option value="MHAD">Mahad</option><option value="MALE">Malegaon</option><option value="MUMBAI">Mumbai</option><option value="NAGP">Nagpur</option><option value="NAND">Nanded</option><option value="NASK">Nashik</option><option value="PALG">Palghar</option><option value="PANC">Panchgani</option><option value="PARB">Parbhani</option><option value="PEN">Pen</option><option value="PHAL">Phaltan</option><option value="PIMP">Pimpri</option><option value="PUNE">Pune</option><option value="RAI">Raigad</option><option value="SANG">Sangli</option><option value="SATA">Satara</option><option value="SOLA">Solapur</option><option value="TMB">Tembhode</option><option value="UDGR">Udgir</option><option value="WARD">Wardha</option></optgroup><optgroup label="Meghalaya"><option value="RNG">Rongjeng</option><option value="SHLG">Shillong</option></optgroup><optgroup label="Nagaland"><option value="DMPR">Dimapur</option></optgroup><optgroup label="NCR"><option value="NCR">National Capital Region (NCR)</option></optgroup><optgroup label="Orissa"><option value="BLSR">Balasore</option><option value="BHUB">Bhubaneshwar</option><option value="PURI">Puri</option><option value="SAMB">Sambalpur</option></optgroup><optgroup label="Punjab"><option value="ABOR">Abohar</option><option value="AHMG">Ahmedgarh</option><option value="AMRI">Amritsar</option><option value="BNGA">Banga</option><option value="BAR">Barnala</option><option value="BHAT">Bathinda</option><option value="CHD">Chandigarh</option><option value="HOSH">Hoshiarpur</option><option value="JALA">Jalandhar</option><option value="KHAN">Khanna</option><option value="KOTK">Kotkapura</option><option value="LUDH">Ludhiana</option><option value="MNSA">Mansa</option><option value="MOGA">Moga</option><option value="MOHL">Mohali</option><option value="NAVN">Nawanshahr</option><option value="PATH">Pathankot</option><option value="PATI">Patiala</option><option value="PATR">Patran</option><option value="RUPN">Rupnagar</option><option value="SANR">Sangrur</option><option value="ZIRK">Zirakpur</option></optgroup><optgroup label="Rajasthan"><option value="ABRD">Abu Road</option><option value="AJMER">Ajmer</option><option value="ALSR">Alsisar (Rajasthan)</option><option value="ALWR">Alwar</option><option value="BANS">Banswara</option><option value="BEAW">Beawar</option><option value="BHIL">Bhilwara</option><option value="BHWD">Bhiwadi</option><option value="BIK">Bikaner</option><option value="DAUS">Dausa</option><option value="JAIP">Jaipur</option><option value="JSMR">Jaisalmer</option><option value="JODH">Jodhpur</option><option value="KISH">Kishangarh</option><option value="KOTA">Kota</option><option value="NEEM">Neemrana</option><option value="SIKR">Sikar</option><option value="SRIG">Sri Ganganagar</option><option value="UDAI">Udaipur</option></optgroup><optgroup label="Singapore"><option value="SING">Singapore</option></optgroup><optgroup label="Tamil Nadu"><option value="ARIY">Ariyalur</option><option value="ARNI">Arni</option><option value="ARUP">Aruppukottai</option><option value="CHEN">Chennai</option><option value="COIM">Coimbatore</option><option value="CUDD">Cuddalore</option><option value="DHAR">Dharapuram</option><option value="DMPI">Dharmapuri</option><option value="DIND">Dindigul</option><option value="EROD">Erode</option><option value="KNPM">Kanchipuram</option><option value="KUMB">Kumbakonam</option><option value="MADU">Madurai</option><option value="MTPM">Mettuppalayam</option><option value="OOTY">Ooty</option><option value="POND">Pondicherry</option><option value="PUDH">Pudhukottai</option><option value="SALM">Salem</option><option value="SIV">Sivakasi</option><option value="TAJO">Tanjore</option><option value="TENK">Tenkasi</option><option value="TIRV">Tirunelveli</option><option value="TIRP">Tirupur</option><option value="TRIC">Trichy</option><option value="VELL">Vellore</option></optgroup><optgroup label="Telangana"><option value="ADIL">Adilabad</option><option value="AMAN">Amangal</option><option value="HYD">Hyderabad</option><option value="KARIM">Karimnagar</option><option value="KHAM">Khammam</option><option value="MRGD">Miryalaguda</option><option value="NIZA">Nizamabad</option><option value="PEDA">Peddapalli</option><option value="POCH">Pochampally</option><option value="SDDP">Siddipet</option><option value="SURY">Suryapet</option><option value="UPPA">Uppal</option><option value="WAR">Warangal</option></optgroup><optgroup label="Tripura "><option value="AGAR">Agartala</option></optgroup><optgroup label="Uttar Pradesh"><option value="AGRA">Agra</option><option value="ALI">Aligarh</option><option value="ALLH">Allahabad</option><option value="BARE">Bareilly</option><option value="BIJ">Bijnor</option><option value="GHAR">Ghazipur</option><option value="GRKP">Gorakhpur</option><option value="KANP">Kanpur</option><option value="LUCK">Lucknow</option><option value="MATH">Mathura</option><option value="MERT">Meerut</option><option value="MORA">Moradabad</option><option value="MUZ">Muzaffarnagar</option><option value="RENU">Renukoot</option><option value="SAHA">Saharanpur</option><option value="VAR">Varanasi</option></optgroup><optgroup label="Uttarakhand"><option value="DEH">Dehradun</option><option value="HRDR">Haridwar</option><option value="MSS">Mussoorie</option><option value="NAIN">Nainital</option><option value="RAMN">Ramnagar</option><option value="RKES">Rishikesh</option><option value="ROOR">Roorkee</option><option value="RUDP">Rudrapur</option></optgroup><optgroup label="West Bengal"><option value="ASANSOL">Asansol</option><option value="BEHA">Berhampore</option><option value="BLPR">Bolpur</option><option value="BURD">Burdwan</option><option value="COBE">Cooch Behar</option><option value="DARJ">Darjeeling</option><option value="DURGA">Durgapur</option><option value="HALD">Haldia</option><option value="HOOG">Hooghly</option><option value="HWRH">Howrah</option><option value="JPG">Jalpaiguri</option><option value="KOLK">Kolkata</option><option value="RANA">Ranaghat</option><option value="SILI">Siliguri</option></optgroup>*/
/* 										</optgroup>*/
/* 									</select>*/
/* 								</div>*/
/* 							  </form>    */
/* 						</div>*/
/* 					</div>*/
/* 				  </div>*/
/* 				</div>*/
/* 			  <div class="clearfix"></div>*/
/* 		 </div>*/
/* 	   </div>*/
/* </div>*/
/* <nav class="navbar nav_bottom" role="navigation">*/
/*  <div class="container">*/
/*  <!-- Brand and toggle get grouped for better mobile display -->*/
/*    <div class="navbar-header nav_2">*/
/*       <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="#"></a>*/
/*    </div> */
/*    <!-- Collect the nav links, forms, and other content for toggling -->*/
/*      {% block tabs %}*/
/*     <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">*/
/*         <ul class="nav navbar-nav nav_1">*/
/*             <li class="current_page"><a href="{{ path("acceuil_demande") }}">Home</a></li>*/
/*             */
/*     		*/
/* 			<li><a href="{{ path("liste_demande") }}">Demandes Services</a></li>*/
/*             <li class="dropdown">*/
/*               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Espace personnel<span class="caret"></span></a>*/
/*               <ul class="dropdown-menu drop_menu" role="menu">*/
/*                 <li><a href="news.html">News</a></li>*/
/*                 <li><a href="{{ path("ajouter_demande") }}">Ajouter une demande</a></li>*/
/*                 <li><a href="{{ path("liste_demande_personnel") }}">Afficher mes demandes</a></li>*/
/*                 */
/*               </ul>*/
/*             </li>*/
/*             */
/*             <li><a href="forum.html">Forum</a></li>*/
/*             */
/*                 {% block compteUser %}*/
/*                    {% endblock %}*/
/*         </ul>*/
/*         <div class="help_line"><div id="txtblnk"><p>HELP LINE : (+216)54 559 441</p></div></div>*/
/*      </div><!-- /.navbar-collapse -->*/
/*      {% endblock %}*/
/*    </div>*/
/* </nav>*/
/* <script type="text/javascript">*/
/* 		$(function() {*/
/* 		blinkeffect('#txtblnk');*/
/* 		})*/
/* 		function blinkeffect(selector) {*/
/* 		$(selector).fadeOut('slow', function() {*/
/* 		$(this).fadeIn('slow', function() {*/
/* 		blinkeffect(this);*/
/* 		});*/
/* 		});*/
/* 		}*/
/* </script>*/
/* */
/* <div align="center">*/
/*     */
/*     <h1> Information sur le demandeur</h1>*/
/*     <br>*/
/*     <br>*/
/* */
/* */
/* */
/* */
/* */
/*   <!--  */
/* */
/* */
/* <div class="panel-body no-padding">*/
/*    */
/*                         <table class="table table-striped">*/
/*                             <thead>*/
/*                                 <tr class="warning">*/
/* */
/*                                 <tr>*/
/*                                     <th>#</th>*/
/*                                      */
/*                                     */
/*                                             <th>nom demandeur</th>*/
/*                                             <th>prenom demandeur</th>*/
/*                                             <th>adresse email demandeur</th>*/
/*                                             <th>telephone demandeur</th>*/
/*                                             <th>statut demandeur</th>*/
/*                                                 */
/*                                     */
/*                                 </tr>*/
/* */
/*                             </thead>*/
/*                             <tbody>*/
/*                                   {% set conteur = 0 %}*/
/*                                 {% for demande in demandes%}*/
/*                                       {% set conteur = conteur + 1 %}*/
/*                                       */
/*                                     <tr>*/
/*                                         <td>{{ conteur }}</td>*/
/*                                         */
/*     */
/*         */
/*         */
/*    */
/*        */
/*         <td>{{demande.nomUser}}</td>*/
/*    */
/*         */
/*         <td>{{demande.prenomUser}}</td>*/
/*    */
/*         */
/*         <td>{{demande.emailUser}}</td>*/
/*    */
/*        */
/*         <td>{{demande.telUser}}</td>*/
/*    */
/*        */
/*         <td>{{demande.statutUser}}</td>*/
/*          */
/* */
/* */
/* */
/*                                         */
/* */
/* */
/*                                     </tr>*/
/*                                 */
/* */
/*                             </tbody>*/
/*                             {%endfor%}*/
/*                         </table>*/
/*                     </div>*/
/* */
/*                             </div>*/
/*     */
/*                         -->*/
/*             */
/*                        */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                       */
/*                          {% for demande in demandes %}*/
/*                          */
/*        <form name="row" method="post" class="register" >*/
/*         <table align="center">*/
/*             */
/*             */
/*                 */
/*                 <tr>          */
/*                <td> <h5><span class="label label-pill label-primary"> Nom : </span></h5> </td>   */
/*                <td> */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="nom_id" id="nom" disabled="disabled" placeholder="Nom" required value="{{demande.nomUser}}" >*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-users"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                               </div>  */
/*              </td>    */
/*             </tr> */
/*                 */
/*            <!-- <tr>*/
/*                 <td> <label> Nom : </label> </td>   */
/*                 <td> <input type="text" name="nom_id" id="nom" placeholder="Nom" required value="{#{u.nomUser}#}"  />  </td>  */
/*             </tr> !-->*/
/*             */
/*             <tr>          */
/*                <td> <h5><span class="label label-pill label-primary"> prenom : </span></h5> </td>   */
/*                <td> */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="nom_id" id="nom" disabled="disabled" placeholder="Nom" required value="{{demande.prenomUser}}" >*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-users"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                               </div>  */
/*              </td>    */
/*             </tr> */
/*               */
/*            <!-- <tr>*/
/*                 <td> <label> Nom : </label> </td>*/
/*                 <td>*/
/*                  <div class="section">*/
/*                                    <label for="nom" class="field prepend-icon">*/
/*                                        <input type="text" name="nom_id" id="nom" placeholder="Nom" required value="{#{u.nomUser}#}" onkeyup="verif_text()">*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="nom_id" class="field-icon">*/
/*                                     <i class="fa fa-users"></i>*/
/*                                     </label>  */
/*                                   </label>*/
/*                                    <div id="img_nom"></div> */
/*                  </div>*/
/*                 </td>*/
/*         </tr>      !-->                  */
/*           <!--  <tr>*/
/*                 <td> <label> Prénom : </label> </td>*/
/*                 <td> <input type="text"  name="prnm_id" id="prenom" placeholder="Prénom" value="{#{u.prenomUser}#}"  /> </td>*/
/*             </tr>   !-->*/
/*             */
/*              <tr>          */
/*                <td> <h5><span class="label label-pill label-primary"> e-mail :</span></h5> </td>   */
/*                <td> */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="prnm_id" id="prenom" disabled="disabled" placeholder="Prénom" value="{{demande.emailUser}}" >*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                               </div>  */
/*              </td>    */
/*             </tr> */
/*             */
/*          <!--   <tr>*/
/*                 <td> <label> Addresse : </label> </td>*/
/*                 <td> <input type="text" name="address_id" id="addresse" placeholder="Addresse" value="{#{u.adresseUser}#}"  /> </td>*/
/*             </tr>   !-->*/
/*             */
/*             <tr>          */
/*              <td> <h5><span class="label label-pill label-primary"> telephone :</span></h5> </td>   */
/*                <td> */
/*                                 <div class="section">*/
/*                                   <label for="username" class="field prepend-icon">*/
/*                                     <input type="text" name="address_id" id="addresse" disabled="disabled" placeholder="Addresse" value="{{demande.telUser}}" >*/
/*                                     <span class="error">  </span>*/
/*                                     <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-home"></i>*/
/*                                     </label>*/
/*                                   </label>*/
/*                               </div>  */
/*              </td>    */
/*             </tr> */
/*             */
/*           <!--  <tr>*/
/*                 <td> <label> Email : </label> </td>*/
/*                 <td> <input type="text" name="email_id" id="email" placeholder="Email" value="{#{u.emailUser}#}"  /> </td>*/
/*             </tr>   !-->*/
/*              */
/*             */
/*             */
/*           <!--  <tr>*/
/*                 <td> <label> Numéro Téléphone : </label> </td>*/
/*                 <td> <input type="text" name="mobile_number" id="tel" placeholder="Mobile Number" value="{#{u.telUser}#}"  /> </td>*/
/*             </tr> !-->*/
/*             */
/*              */
/*             */
/*            <!-- <tr>*/
/*                 <td> <label> Statut : </label> </td>           */
/*                 <td> <input type="text" name="getName" id="getName" value="{#{u.statutUser}#}" disabled /> </td>*/
/*              <td>           */
/*               <select value="" name="statut">  */
/*              <option value="null">Selectionner Statut</option>*/
/*                 <option value="Particulier" name="Particulier">Entreprise</option>*/
/*                 <option value="Entreprise"  name="Entreprise">Particulier</option>*/
/*               </select>*/
/*              </td>   */
/*             </tr>  !--> */
/* */
/*            <!-- <tr>          */
/*              <td> <h5><span class="label label-pill label-primary"> Statut : </span></h5> </td>   */
/*                <td> */
/*                     <div class="section">*/
/*                         <label for="name" class="field prepend-icon">*/
/*                             <select path="country" id="country" class="form-control input-sm" name="statut">*/
/*                                   <option  value="{#{u.statutUser}}">{{u.statutUser}#}</option>*/
/*                                   <option  value="">----------------------------</option>*/
/*                                   <option value="Particulier" name="Particulier">Particulier</option>*/
/*                                   <option value="Entreprise"  name="Entreprise">Entreprise</option>*/
/*                             </select>*/
/*                             <label for="name" class="field-icon">*/
/*                                 <i class="fa fa-user"></i>*/
/*                             </label>*/
/*                         </label>*/
/*                     </div> */
/*              </td>    */
/*             </tr> */
/*             !-->*/
/*           <!--  <tr>*/
/*                 <td> <label> Login : </label> </td>*/
/*                 <td> <input type="text" name="login_id" id="login" placeholder="Login" value="{#{u.loginUser}#}"  /> </td>*/
/*             </tr> !-->*/
/*             */
/*             <tr>*/
/*              <td> <h5><span class="label label-pill label-primary"> statut :   </span></h5> </td>   */
/*              <td>             */
/*                      <div class="section">*/
/*                          <label for="username" class="field prepend-icon">*/
/*                             <input type="text" name="login_id" id="login" disabled="disabled" placeholder="Login" value="{{demande.statutUser}}" >*/
/*                               <span class="error">  </span>*/
/*                                  <label for="login_id" class="field-icon">*/
/*                                         <i class="fa fa-lock"></i>*/
/*                                   </label>*/
/*                           </label>*/
/*                      </div>          */
/*              </td>   */
/*             </tr>*/
/*             */
/*             */
/*             */
/*          <!--   <tr>*/
/*                 <td> <label> Sexe : </label> </td>*/
/*                 <td> <input type="text" name="getName" id="getName" value="{#{u.sexeUser}#}" disabled  /> </td>*/
/*             <td>              */
/*             <select value="" name="choixSexe">*/
/*                 <option value="null">Selectionner Sexe</option>  */
/*                 <option value="Homme" name="Homme">Homme</option>*/
/*                 <option value="Femmme" name="Femmme">Femmme</option>*/
/*             </select>*/
/*              </td>  */
/*             </tr> !-->*/
/*             */
/*              */
/*             */
/*             */
/*            */
/*            */
/*             {% endfor %}*/
/*             */
/*        </table> <br>*/
/*           <!--onclick="myFunction()"!-->                                       */
/*         </form> */
/*                         */
/* </div>              */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/* */
/*  <!-- Start of fotter!-->*/
/* <div class="footer_widget">*/
/* 	<div class="container">*/
/* 		<div class="col-md-4">*/
/* 			<aside id="text-1" class="widget widget_text">*/
/* 				<h3 class="widget-title"><span>COME VISIT US</span></h3>*/
/* 				<div class="textwidget"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>*/
/* 				   <p><em style="color: #fff;">standard chunk.,<br> Finibus Bonorum,<br> Ipsum generators, treatise</em></p>*/
/* 				</div> */
/* 			</aside>*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<aside id="text-2" class="widget widget_text">*/
/* 				<h3 class="widget-title"><span>MORE ABOUT US</span></h3>*/
/* 				<div class="textwidget">*/
/* 					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,.</p></div>*/
/* 		    </aside>*/
/* 		</div>*/
/* 		<div class="col-md-4">*/
/* 			<aside>*/
/* 				<h3 class="widget-title"><span>FLICKR FEED</span></h3>*/
/* 				<ul class="gallery">*/
/* 					<li><a href="{{asset('images/pic5.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic5.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 					</li>*/
/* 					<li><a href="{{asset('images/pic6.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic6.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 					</li>*/
/* 					<li><a href="{{asset('images/pic11.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic11.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 					</li>*/
/* 					<li class="last">*/
/* 						<a href="{{asset('images/pic12.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic12.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 					</li>*/
/* 					<li>*/
/* 						<a href="{{asset('images/pic6.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic6.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 					</li>*/
/* 					<li>*/
/* 					   <a href="{{asset('images/pic5.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic5.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 				    </li>*/
/* 					<li>*/
/* 						<a href="{{asset('images/pic11.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic11.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 					</li>*/
/* 					<li class="last">*/
/* 						<a href="{{asset('images/pic12.jpg')}}" class="img-responsive" title="Rose" rel="title1">*/
/* 						<img src="{{asset('images/pic12.jpg')}}" class="img-responsive" alt="name">*/
/* 					   </a>*/
/* 				    </li>*/
/* 					<div class="clearfix"> </div>*/
/* 				</ul>*/
/* 			</aside>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="footer_middle">*/
/* 	<div class="container">*/
/*         <div class="col-sm-7">*/
/*           <div class="footer-icons"> */
/*           	<a href="https://twitter.com/?lang=en" class="social-icon"><i class="fa fa-twitter has-circle"></i></a> */
/*           	<a href="https://www.facebook.com" class="social-icon"><i class="fa fa-facebook has-circle"></i></a> */
/*           	<a href="https://www.google.tn/" class="social-icon"><i class="fa fa-google-plus has-circle"></i></a> */
/*           	<a href="https://www.linkedin.com/nhome/" class="social-icon"><i class="fa fa-linkedin has-circle"></i></a> */
/*           	<div class="clearfix"> </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-sm-5">*/
/*           <div class="newsletter_signup">*/
/*             <form novalidate="" target="_blank" name="newsletter-subscribe-form" id="newsletter-subscribe-form" method="post" class="form-inline validate">*/
/*               <input type="email" required="" placeholder="Subscribe to our newsletter" class="form-control" name="EMAIL" value="">*/
/*               <input type="submit" id="newsletter-subscribe" name="subscribe" value="SUBSCRIBE">*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*         <div class="clearfix"> </div>*/
/*     </div>*/
/* </div>		*/
/* <div class="footer_bottom">*/
/* 	<div class="container">*/
/* 		<div class="copy">*/
/*             <p>Copyright © 2016 Community. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>*/
/* 	    </div>*/
/* 	</div>*/
/*     <!-- Start of Audio Player Code !-->*/
/*   <div id="backgroundaudio">*/
/*        <i class="fa fa-volume-up"></i>*/
/*     <audio autoplay="" controls="" loop="" preload="">*/
/*        <source src="{{asset('audios/Smile.ogg')}}" type="audio/ogg"></source>*/
/*        <source src="{{asset('audios/Smile.mp3')}}" type="audio/mpeg"></source>*/
/*         Your browser does not support the audio element.*/
/*     </audio>*/
/*   </div>      */
/*         <!-- Style Audio Player !-->*/
/* <style media="screen" type="text/css">*/
/*  #backgroundaudio {*/
/*   display: block;*/
/*   position: fixed;*/
/*   bottom: -43px;*/
/*   left: 5px;*/
/*   -webkit-transition: all 1s ease-in-out;*/
/*   -moz-transition: all 1s ease-in-out;*/
/*   -ms-transition: all 1s ease-in-out;*/
/*   -o-transition: all 1s ease-in-out;*/
/*   transition: all 1s ease-in-out;*/
/*  }*/
/*  #backgroundaudio:hover {*/
/*   bottom: 0;*/
/*   -webkit-transition: all 1s ease-in-out;*/
/*   -moz-transition: all 1s ease-in-out;*/
/*   -ms-transition: all 1s ease-in-out;*/
/*   -o-transition: all 1s ease-in-out;*/
/*   transition: all 1s ease-in-out;*/
/*  }*/
/*  #backgroundaudio audio {*/
/*   background: #ffffff;*/
/*   padding: 5px;*/
/*   display: table-cell;*/
/*   vertical-align: middle;*/
/*   height: 43px;*/
/*   z-index: 9998;*/
/*  }*/
/*  #backgroundaudio i {*/
/*   font-size: 40px;*/
/*   display: block;*/
/*   background: #ffffff;*/
/*   padding: 5px;*/
/*   width: 50px;*/
/*   float: none;*/
/*   margin-bottom: -1px;*/
/*   z-index: 9999;*/
/*  }*/
/* </style>*/
/*   <!-- End Of Style Audio Player !-->*/
/*     <!-- End of Audio Player Code !-->*/
/*     */
/* 	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">Top </span></a>*/
/*       <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>*/
/*       <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>*/
/*       <script type="text/javascript">*/
/* 		$(document).ready(function() {*/
/* 			/**/
/* 			var defaults = {*/
/* 	  			containerID: 'toTop', // fading element id*/
/* 				containerHoverID: 'toTopHover', // fading element hover id*/
/* 				scrollSpeed: 1200,*/
/* 				easingType: 'linear' */
/* 	 		};*/
/* 			*//* */
/* 			*/
/* 			$().UItoTop({ easingType: 'easeOutQuart' });*/
/* 			*/
/* 		});*/
/* 	  </script>*/
/* </div>	*/
/* <!----language selector----->*/
/* <script type="text/javascript" src="{{asset('js/jquery.leanModal.min.js')}}"></script>*/
/* <link href="{{asset('css/jquery.uls.css')}}" rel="stylesheet"/>*/
/* <link href="{{asset('css/jquery.uls.grid.css')}}" rel="stylesheet"/>*/
/* <link href="{{asset('css/jquery.uls.lcd.css')}}" rel="stylesheet"/>*/
/* <!-- Source -->*/
/* <script src="{{asset('js/jquery.uls.data.js')}}"></script>*/
/* <script src="{{asset('js/jquery.uls.data.utils.js')}}"></script>*/
/* <script src="{{asset('js/jquery.uls.lcd.js')}}"></script>*/
/* <script src="{{asset('js/jquery.uls.languagefilter.js')}}"></script>*/
/* <script src="{{asset('js/jquery.uls.regionfilter.js')}}"></script>*/
/* <script src="{{asset('js/jquery.uls.core.js')}}"></script>*/
/* <script>*/
/* 	$( document ).ready( function() {*/
/* 		$( '.uls-trigger' ).uls( {*/
/* 			onSelect : function( language ) {*/
/* 				var languageName = $.uls.data.getAutonym( language );*/
/* 				$( '.uls-trigger' ).text( languageName );*/
/* 			},*/
/* 			quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME*/
/* 		} );*/
/* 	} );*/
/* </script>		*/
/* <!-- FlexSlider -->*/
/* <link href="{{asset('css/flexslider.css')}}" rel='stylesheet' type='text/css' />*/
/* <script defer src="{{asset('js/jquery.flexslider.js')}}"></script>*/
/* 	  <script type="text/javascript">*/
/* 		$(function(){*/
/* 		  SyntaxHighlighter.all();*/
/* 		});*/
/* 		$(window).load(function(){*/
/* 		  $('.flexslider').flexslider({*/
/* 			animation: "slide",*/
/* 			start: function(slider){*/
/* 			  $('body').removeClass('loading');*/
/* 			}*/
/* 		  });*/
/* 		});*/
/* 	  </script>*/
/* <!-- FlexSlider -->	*/
/* {% endblock %}*/
/*     </body>*/
/* </html>*/
/* {% endblock %}*/
