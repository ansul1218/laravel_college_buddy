
@extends('frontend.layouts.main')
@section('main-container')
<link rel="stylesheet" href="{{ url('frontend/css/style.css')}}">
<link href="{{ url('frontend/assets/dist/css/tabulator_bootstrap5.min.css')}}" rel="stylesheet">


<section data-bs-version="5.1" class="tabs content18 cid-tETiYfUMM0" id="tabs1-2d">





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
                        <button class="tablinks active" onclick="openSubject(event, 'sem1_english_papers')">English</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem1_math_papers')">Engineering Math I</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem1_physics_papers')">Physics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem1_mechanics_papers')">Mechanics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem1_c_papers')">C++</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem1_ed_papers')">Engineering Drawing</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem1_environment_papers')">Environment science</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem1_english_papers" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"English-cbs-2015","CBS", "2015","/files/btech/papers/s1/english/btech-1-sem-english-CBS-2015.pdf","/files/btech/papers/s1/english/btech-1-sem-english-CBCS-2022.pdf"
                             "English-cbs-2016","CBS", "2016","/files/btech/papers/s1/english/btech-1-sem-english-CBS-2016.pdf","/files/btech/papers/s1/english/btech-1-sem-english-CBCS-2022.pdf"
                             "English-cbcs-2022","CBCS", "2022","/files/btech/papers/s1/english/btech-1-sem-english-CBCS-2022.pdf","/files/btech/papers/s1/english/btech-1-sem-english-CBCS-2022.pdf"`;

                            //define table
                            var table = new Tabulator("#sem1_english_papers", {
                                data:csvData,

                                importFormat:"csv",
                                layout:"fitColumns",
                                responsiveLayout:true,
                                columns:[
                                {title:"Name", field:"Name", formatter:"plaintext" ,responsive:0},
                                {title:"exam system", field:"exam system", formatter:"plaintext" ,responsive:0},
                                {title:"Date", field:"Date", formatter:"plaintext" , responsive:3},
                                {title:"View", field:"View",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "View",
                                    target:"_blank",

                                }},
                                {title:"Download url", field:"Download url",responsive:0, formatter:"link", formatterParams:{
                                    labelField:"Download url",
                                    label: "Download",
                                    download:true,
                                    target:"_blank",

                                }}



                                ]
                            });
                        </script>

                    </div>

                    <div id="sem1_math_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem1_math_papers", {
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

                    <div id="sem1_physics_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem1_physics_papers", {
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

                    <div id="sem1_mechanics_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem1_mechanics_papers", {
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

                    <div id="sem1_c_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem1_c_papers", {
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

                    <div id="sem1_ed_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem1_ed_papers", {
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

                    <div id="sem1_environment_papers" class="tabcontent">

                        <script> //define some CSV data
                             var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                              "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                              "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                             //define table
                             var table = new Tabulator("#sem1_environment_papers", {
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

<section data-bs-version="5.1" class="tabs content18 cid-tETiYgwzKt" id="tabs1-2e">





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
                        <button class="tablinks active" onclick="openSubject(event, 'sem2_business_papers')">Business Communication</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem2_math_papers')">Engineering Math II</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem2_chemistry_papers')">Chemistry</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem2_electrical_papers')">Principles of Electrical Engineering</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem2_electronics_papers')">Engineering Electronics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem2_workshop_papers')">Workshop technology</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem2_business_papers" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem2_business_papers", {
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

                    <div id="sem2_math_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem2_math_papers", {
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

                    <div id="sem2_chemistry_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem2_chemistry_papers", {
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

                    <div id="sem2_electrical_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem2_electrical_papers", {
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

                    <div id="sem2_electronics_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem2_electronics_papers", {
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

                    <div id="sem2_workshop_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem2_workshop_papers", {
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

<section data-bs-version="5.1" class="tabs content18 cid-tETiYh97E8" id="tabs1-2f">





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
                        <button class="tablinks active" onclick="openSubject(event, 'sem3_c_papers')">C++</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem3_math_papers')">Probability & statistics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem3_economics_papers')">Economics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem3_data_structures_papers')">Data structures</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem3_digital_electronics_papers')">Digital electronics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem3_coa_papers')">Computer Organisation and Architecture</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem3_c_papers" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem3_c_papers", {
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

                    <div id="sem3_math_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem3_math_papers", {
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

                    <div id="sem3_economics_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem3_economics_papers", {
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

                    <div id="sem3_data_structures_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem3_data_structures_papers", {
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

                    <div id="sem3_digital_electronics_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem3_digital_electronics_papers", {
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

                    <div id="sem3_coa_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem3_coa_papers", {
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

<section data-bs-version="5.1" class="tabs content18 cid-tETiYhDAA7" id="tabs1-2g">





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
                        <button class="tablinks active" onclick="openSubject(event, 'sem4_human_values_papers')">Human Values</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem4_math_papers')">Optimization And Calculus</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem4_dbms_papers')">DBMS</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem4_os_papers')">Operating Systems</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem4_toc_papers')">Theory of Computation</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem4_microprocessors_papers')">Microprocessors and periferals</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem4_human_values_papers" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem4_human_values_papers", {
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

                    <div id="sem4_math_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem4_math_papers", {
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

                    <div id="sem4_dbms_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem4_dbms_papers", {
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

                    <div id="sem4_os_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem4_os_papers", {
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

                    <div id="sem4_toc_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem4_toc_papers", {
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

                    <div id="sem4_microprocessors_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem4_microprocessors_papers", {
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

<section data-bs-version="5.1" class="tabs content18 cid-tETiYicOjE" id="tabs1-2h">





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
                        <button class="tablinks active" onclick="openSubject(event, 'sem5_networks_papers')">Computer Networks</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem5_java_papers')">Core JAVA</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem5_graphics_papers')">Computer Graphics</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem5_ai_papers')">AI & Expert Systems</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem5_software_engineering_papers')">Software Engineering</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem5_ada_papers')">Analysis and Design of Algorithms</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem5_networks_papers" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem5_networks_papers", {
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

                    <div id="sem5_java_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem5_java_papers", {
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

                    <div id="sem5_graphics_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem5_graphics_papers", {
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

                    <div id="sem5_ai_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem5_ai_papers", {
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

                    <div id="sem5_software_engineering_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem5_software_engineering_papers", {
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

                    <div id="sem5_ada_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem5_ada_papers", {
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

<section data-bs-version="5.1" class="tabs content18 cid-tETiYiKgLG" id="tabs1-2i">





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
                        <button class="tablinks active" onclick="openSubject(event, 'sem6_ajava_papers')">Advance JAVA</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem6_dos_papers')"> Distributed Operating Systems </button>
                        <button class="tablinks" onclick="openSubject(event, 'sem6_compiler_design_papers')">Compiler Design</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem6_linux_papers')">Linux Administration </button>
                        <button class="tablinks" onclick="openSubject(event, 'sem6_mining_papers')">Data Mining and Warehousing</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem6_modeling_papers')">Modeling and Simulation</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem6_ajava_papers" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem6_ajava_papers", {
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

                    <div id="sem6_dos_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem6_dos_papers", {
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

                    <div id="sem6_compiler_design_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem6_compiler_design_papers", {
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

                    <div id="sem6_linux_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem6_linux_papers", {
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

                    <div id="sem6_mining_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem6_mining_papers", {
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

                    <div id="sem6_modeling_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem6_modeling_papers", {
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

<section data-bs-version="5.1" class="tabs content18 cid-tETiYjfnn3" id="tabs1-2j">





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
                        <button class="tablinks active" onclick="openSubject(event, 'sem7_advance_commputer_architecture_papers')">Advance Computer Architecture</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem7_mobile_computing_papers')"> Wireless and Mobile Computing</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem7_information_security_papers')">Information Security</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem7_cloud_computing_papers')">Cloud Computing</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem7_mis_papers')">Management Information System</button>
                        <button class="tablinks" onclick="openSubject(event, 'sem7_multimedia_papers')">Multimedia Technology</button>
                    </div>

                    <!-- Tab content -->
                    <div id="sem7_advance_commputer_architecture_papers" class="tabcontent" style="display:block;">

                       <script> //define some CSV data
                            var csvData = `"noun", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "pronnoun", "20/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "verb", "27/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem7_advance_commputer_architecture_papers", {
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

                    <div id="sem7_mobile_computing_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"matrix", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "calculus", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "statistics", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem7_mobile_computing_papers", {
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

                    <div id="sem7_information_security_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"chapter 1", "26/09/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "chapter 2", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "book", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem7_information_security_papers", {
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

                    <div id="sem7_cloud_computing_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"truss", "26/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "bridges", "289/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "force", "30/02/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem7_cloud_computing_papers", {
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

                    <div id="sem7_mis_papers" class="tabcontent">

                        <script> //define some CSV data
                            var csvData = `"classes", "26/10/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "objects", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "basics", "26/12/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem7_mis_papers", {
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

                    <div id="sem7_multimedia_papers" class="tabcontent">

                       <script> //define some CSV data
                            var csvData = `"3d design", "23/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "2d design", "25/11/2022","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"
                             "parallel spaces", "26/11/2023","https://1drv.ms/b/s!Ao5mnlFEn5kDZu-km_vQTYSAba0?e=ZeqOIl"`;

                            //define table
                            var table = new Tabulator("#sem7_multimedia_papers", {
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
