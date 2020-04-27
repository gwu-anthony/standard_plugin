<?php
/*
 Plugin Name: Standard Menu
 Description: Plugin Combination 
 Author: Anthony Ramos
 Version: 0.0.1
 Author URI: anthonytorresramos@gmail.com
 */


add_action("admin_menu", "add_menu_items");
function add_menu_items()////this one
    { 
          
        add_menu_page(
        "Education Must",  // Page Title
        "Education Must", // Name of Settings
        "manage_options", // Default parameter
        "education_must_settings_page", //Page Title and slug
        "fnEducationMustSettings",//Function Callback
        'dashicons-chart-area', //Dashicon or icon 
         99 // order in dashboard
        );

        add_submenu_page(
            'education_must_settings_page',       // parent slug
            'Recent Bids',    // page title
            'Recent Bids',             // menu title
            'manage_options',           // capability
            'wc-auction-reports', // slug
            'acutions_customers_spendings_list' // callback
        ); 
    }

    
    
    


    function fnEducationMustSettings()
    {
        ?>
            <div class="wrap">
                <div id="icon-options-general" class="icon32"></div>
                <h1>Main Title</h1>
                <form method="post" action="options.php" id="form-website" enctype="multipart/form-data">
                    <?php
                        settings_fields("optEducationMustSwitch"); // id of add_settings_section
                        do_settings_sections("convert-api-options"); 
                        submit_button('Save Changes', 'primary', 'btnSubmit');
                    ?>
                </form>
            </div>
        <?php
    }


    add_action("admin_init", "display_convert_api_options");
    function display_convert_api_options()
    {
        add_settings_section( 
            "optEducationMustSwitch", //id of settings field
            "Main Subtitle", //title
            "fnTest", //callback or functions
            "convert-api-options" //settings page 
        );

        add_settings_field(
            "Switch_1", // id of get_options
            "Switch 1 Label", // label of field or title
            "display_plugins_form_convert_api", //function callback for field
            "convert-api-options", // settings page of add_settings_section
            "optEducationMustSwitch" // id of settings field or the slug name of section
        );
        
        register_setting(
            "optEducationMustSwitch",  //id of settings field
            "Switch_1" //id of get_options
        );
    }

    function display_plugins_form_convert_api()
    {
        ?>
        <input type="" name="Switch_1" value="<?php echo get_option('Switch_1');?>">
        <?php
        $brazil_value = get_option('Switch_1');
        //$brazil_value = $brazil_value->{'result-float'};

        echo '<br><b>Brazil value: '.$brazil_value.'<b>';
    }

    function fnTest(){
        echo 'test function of add settings section';
    }


    

    function acutions_customers_spendings_list()
    {
        ?>
            <div class="wrap">
                <div id="icon-options-general" class="icon32"></div>
                <h1>Main Title</h1>
                <form method="post" action="options.php" id="form-website" enctype="multipart/form-data">
                    <?php
                        settings_fields("optEducationMustSwitch"); // id of add_settings_section
                        do_settings_sections("convert-api-options"); 
                        submit_button('Save Changes', 'primary', 'btnSubmit');
                    ?>
                </form>
            </div>
        <?php
    }

   











?>