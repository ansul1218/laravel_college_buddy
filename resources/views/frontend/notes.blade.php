
@extends('frontend.layouts.main')
@section('main-container')

<link rel="stylesheet" href="{{ url('frontend/css/style.css')}}">
<link href="{{ url('frontend/assets/dist/css/tabulator_bootstrap5.min.css')}}" rel="stylesheet">

<section data-bs-version="5.1" class="tabs content18 cid-tET2eV8bEP" id="tabs1-1s">





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2"><strong>Semester I</strong></h3>

            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-8">
              <script>
                function openSubject(evt, subjectName) {
                    // Declare all variables
                    var i, tabcontent, tablinks;

                    // Get all elements with class="tabcontent" and hide them
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }

                    // Get all elements with class="tablinks" and remove the class "active"
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }

                    // Show the current tab, and add an "active" class to the button that opened the tab
                    document.getElementById(subjectName).style.display = "block";
                    evt.currentTarget.className += " active";
                    }
              </script>
              <!-- Tab links -->

                    <div class="tab">
                        <button class="tablinks active" onclick="openSubject(event, 'sem1_english_notes')">English</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem1_math_notes')">Engineering Math I</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem1_physics_notes')">Physics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem1_mechanics_notes')">Mechanics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem1_c_notes')">C++</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem1_ed_notes')">Engineering Drawing</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem1_environment_notes')">Environmental science</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem1_english_notes" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://onedrive.live.com/download?cid=03999F44519E668E&resid=3999F44519E668E%21102&authkey=AOdM-qPgxc0KBLQ&em=2"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","gs://btechbuddy-c10dc.appspot.com/cs 703 notes 3.pdf"`;

                            //define table
                            var table = new Tabulator("#sem1_english_notes", {
                                data:csvData,

                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem1_math_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem1_math_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem1_physics_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem1_physics_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem1_mechanics_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem1_mechanics_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem1_c_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem1_c_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem1_ed_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem1_ed_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>


                    <div id="sem1_environment_notes" class="tabcontent">

                        <script> //define some CSV data
                             var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                              "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                              "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                             //define table
                             var table = new Tabulator("#sem1_environment_notes", {
                                 data:csvData,
                                 importFormat:"csv",
                                 layout:"fitColumns",
                                 responsiveLayout:true,
                                 columns:[
                                 {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                 {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                 {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                     labelField:"Download url",
                                     label: "click here to download",
                                     download:true,
                                     target:"_blank",

                                 }}



                                 ]
                             });
                         </script>

                     </div>
                        </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="tabs content18 cid-tET2eV8bEP" id="tabs1-2s">





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2"><strong>Semester II</strong></h3>

            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-8">
              <script>
                function openSubject(evt, subjectName) {
                    // Declare all variables
                    var i, tabcontent, tablinks;

                    // Get all elements with class="tabcontent" and hide them
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }

                    // Get all elements with class="tablinks" and remove the class "active"
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }

                    // Show the current tab, and add an "active" class to the button that opened the tab
                    document.getElementById(subjectName).style.display = "block";
                    evt.currentTarget.className += " active";
                    }
              </script>
              <!-- Tab links -->

                    <div class="tab">
                        <button class="tablinks active" onclick="openSubject(event, 'sem2_business_notes')">Business Communication</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem2_math_notes')">Engineering Math II</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem2_chemistry_notes')">Chemistry</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem2_electrical_notes')">Principles of Electrical Engineering</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem2_electronics_notes')">Engineering Electronics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem2_workshop_notes')">Workshop technology</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem2_business_notes" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem2_business_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem2_math_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem2_math_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem2_chemistry_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem2_chemistry_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem2_electrical_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem2_electrical_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem2_electronics_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem2_electronics_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem2_workshop_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem2_workshop_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                        </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="tabs content18 cid-tET2eV8bEP" id="tabs1-3s">





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2"><strong>Semester III</strong></h3>

            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-8">
              <script>
                function openSubject(evt, subjectName) {
                    // Declare all variables
                    var i, tabcontent, tablinks;

                    // Get all elements with class="tabcontent" and hide them
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }

                    // Get all elements with class="tablinks" and remove the class "active"
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }

                    // Show the current tab, and add an "active" class to the button that opened the tab
                    document.getElementById(subjectName).style.display = "block";
                    evt.currentTarget.className += " active";
                    }
              </script>
              <!-- Tab links -->

                    <div class="tab">
                        <button class="tablinks active" onclick="openSubject(event, 'sem3_c_notes')">C++</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem3_math_notes')">Probability & statistics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem3_economics_notes')">Economics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem3_data_structures_notes')">Data structures</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem3_digital_electronics_notes')">Digital electronics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem3_coa_notes')">Computer Organisation and Architecture</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem3_c_notes" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem3_c_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem3_math_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem3_math_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem3_economics_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem3_economics_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem3_data_structures_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem3_data_structures_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem3_digital_electronics_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem3_digital_electronics_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem3_coa_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem3_coa_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                        </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="tabs content18 cid-tET2eV8bEP" id="tabs1-4s">





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2"><strong>Semester IV</strong></h3>

            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-8">
              <script>
                function openSubject(evt, subjectName) {
                    // Declare all variables
                    var i, tabcontent, tablinks;

                    // Get all elements with class="tabcontent" and hide them
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }

                    // Get all elements with class="tablinks" and remove the class "active"
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }

                    // Show the current tab, and add an "active" class to the button that opened the tab
                    document.getElementById(subjectName).style.display = "block";
                    evt.currentTarget.className += " active";
                    }
              </script>
              <!-- Tab links -->

                    <div class="tab">
                        <button class="tablinks active" onclick="openSubject(event, 'sem4_human_values_notes')">Human Values</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem4_math_notes')">Optimization And Calculus</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem4_dbms_notes')">DBMS</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem4_os_notes')">Operating Systems</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem4_toc_notes')">Theory of Computation</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem4_microprocessors_notes')">Microprocessors and periferals</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem4_human_values_notes" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem4_human_values_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem4_math_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem4_math_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem4_dbms_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem4_dbms_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem4_os_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem4_os_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem4_toc_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem4_toc_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem4_microprocessors_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem4_microprocessors_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                        </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="tabs content18 cid-tET2eV8bEP" id="tabs1-5s">





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2"><strong>Semester V</strong></h3>

            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-8">
              <script>
                function openSubject(evt, subjectName) {
                    // Declare all variables
                    var i, tabcontent, tablinks;

                    // Get all elements with class="tabcontent" and hide them
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }

                    // Get all elements with class="tablinks" and remove the class "active"
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }

                    // Show the current tab, and add an "active" class to the button that opened the tab
                    document.getElementById(subjectName).style.display = "block";
                    evt.currentTarget.className += " active";
                    }
              </script>
              <!-- Tab links -->

                    <div class="tab">
                        <button class="tablinks active" onclick="openSubject(event, 'sem5_networks_notes')">Computer Networks</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem5_java_notes')">Core JAVA</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem5_graphics_notes')">Computer Graphics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem5_ai_notes')">AI & Expert Systems</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem5_software_engineering_notes')">Software Engineering</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem5_ada_notes')">Analysis and Design of Algorithms</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem5_networks_notes" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem5_networks_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem5_java_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem5_java_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem5_graphics_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem5_graphics_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem5_ai_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem5_ai_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem5_software_engineering_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem5_software_engineering_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem5_ada_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem5_ada_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                        </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="tabs content18 cid-tET2eV8bEP" id="tabs1-6s">





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2"><strong> Semester VI</strong></h3>

            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-8">
              <script>
                function openSubject(evt, subjectName) {
                    // Declare all variables
                    var i, tabcontent, tablinks;

                    // Get all elements with class="tabcontent" and hide them
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }

                    // Get all elements with class="tablinks" and remove the class "active"
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }

                    // Show the current tab, and add an "active" class to the button that opened the tab
                    document.getElementById(subjectName).style.display = "block";
                    evt.currentTarget.className += " active";
                    }
              </script>
              <!-- Tab links -->

                    <div class="tab">
                        <button class="tablinks active" onclick="openSubject(event, 'sem6_ajava_notes')">Advance JAVA</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem6_dos_notes')"> Distributed Operating Systems </button>
                        <button class="tablinks" onclick="openSubject(event, 'sem6_compiler_design_notes')">Compiler Design</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem6_linux_notes')">Linux Administration </button>
                        <button class="tablinks" onclick="openSubject(event, 'sem6_mining_notes')">Data Mining and Warehousing</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem6_modeling_notes')">Modeling and Simulation</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem6_ajava_notes" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem6_ajava_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem6_dos_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem6_dos_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem6_compiler_design_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem6_compiler_design_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem6_linux_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem6_linux_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem6_mining_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem6_mining_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem6_modeling_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem6_modeling_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                        </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="tabs content18 cid-tET2eV8bEP" id="tabs1-7s">





    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h3 class="mbr-section-title mb-0 mbr-fonts-style display-2"><strong>Semester VII</strong></h3>

            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-8">
              <script>
                function openSubject(evt, subjectName) {
                    // Declare all variables
                    var i, tabcontent, tablinks;

                    // Get all elements with class="tabcontent" and hide them
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }

                    // Get all elements with class="tablinks" and remove the class "active"
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }

                    // Show the current tab, and add an "active" class to the button that opened the tab
                    document.getElementById(subjectName).style.display = "block";
                    evt.currentTarget.className += " active";
                    }
              </script>
              <!-- Tab links -->

                    <div class="tab">
                        <button class="tablinks active" onclick="openSubject(event, 'sem7_advance_commputer_architecture_notes')">Advance Computer Architecture</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem7_mobile_computing_notes')"> Wireless and Mobile Computing</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem7_information_security_notes')">Information Security</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem7_cloud_computing_notes')">Cloud Computing</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem7_mis_notes')">Management Information System</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem7_multimedia_notes')">Multimedia Technology</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem7_advance_commputer_architecture_notes" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem7_advance_commputer_architecture_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem7_mobile_computing_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem7_mobile_computing_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem7_information_security_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem7_information_security_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem7_cloud_computing_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem7_cloud_computing_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem7_mis_notes" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem7_mis_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem7_multimedia_notes" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem7_multimedia_notes", {
                                data:csvData,
                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "click here to download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                        </div>
        </div>
    </div>
</section>

<script src="{{ url('frontend/assets/mbr-tabs/mbr-tabs.js') }}"></script>
<script type="text/javascript" src="{{ url('frontend/assets/dist/js/tabulator.min.js')}}"></script>
@endsection
