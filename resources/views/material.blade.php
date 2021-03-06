<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <title>Material | OClass Official Learning Website</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/Material.css')}}" media="screen">
    <script src="{{asset('js/Modal.js');}}"></script>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


</head>

<body class="u-body">
    <header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-ec04">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </header>
    <section class="u-clearfix u-section-1" id="sec-4076">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-spacing-top u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-align-left u-container-style u-custom-color-1 u-layout-cell u-left-cell u-size-15 u-layout-cell-1" src="">
                        <div class="u-container-layout u-container-layout-1">
                            <br /> <br />
                            <div class="gambar2"></div>

                            <h3 class="u-align-center u-text u-text-1">{{$user->name}}</h3>

                            <a href="{{route('profile')}}"
                                class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-custom-color-2 u-btn-1">Profile</a>
                            <span class="u-icon u-icon-circle u-text-palette-1-base u-icon-1">
                                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 53 53"
                                    style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a243"></use>
                                </svg><svg class="u-svg-content" viewBox="0 0 53 53" x="0px" y="0px" id="svg-a243"
                                    style="enable-background:new 0 0 53 53;">
                                    <path style="fill:#E7ECED;"
                                        d="M18.613,41.552l-7.907,4.313c-0.464,0.253-0.881,0.564-1.269,0.903C14.047,50.655,19.998,53,26.5,53c6.454,0,12.367-2.31,16.964-6.144c-0.424-0.358-0.884-0.68-1.394-0.934l-8.467-4.233c-1.094-0.547-1.785-1.665-1.785-2.888v-3.322c0.238-0.271,0.51-0.619,0.801-1.03c1.154-1.63,2.027-3.423,2.632-5.304c1.086-0.335,1.886-1.338,1.886-2.53v-3.546c0-0.78-0.347-1.477-0.886-1.965v-5.126c0,0,1.053-7.977-9.75-7.977s-9.75,7.977-9.75,7.977v5.126c-0.54,0.488-0.886,1.185-0.886,1.965v3.546c0,0.934,0.491,1.756,1.226,2.231c0.886,3.857,3.206,6.633,3.206,6.633v3.24C20.296,39.899,19.65,40.986,18.613,41.552z">
                                    </path>
                                    <g>
                                        <path style="fill:#556080;"
                                            d="M26.953,0.004C12.32-0.246,0.254,11.414,0.004,26.047C-0.138,34.344,3.56,41.801,9.448,46.76c0.385-0.336,0.798-0.644,1.257-0.894l7.907-4.313c1.037-0.566,1.683-1.653,1.683-2.835v-3.24c0,0-2.321-2.776-3.206-6.633c-0.734-0.475-1.226-1.296-1.226-2.231v-3.546c0-0.78,0.347-1.477,0.886-1.965v-5.126c0,0-1.053-7.977,9.75-7.977s9.75,7.977,9.75,7.977v5.126c0.54,0.488,0.886,1.185,0.886,1.965v3.546c0,1.192-0.8,2.195-1.886,2.53c-0.605,1.881-1.478,3.674-2.632,5.304c-0.291,0.411-0.563,0.759-0.801,1.03V38.8c0,1.223,0.691,2.342,1.785,2.888l8.467,4.233c0.508,0.254,0.967,0.575,1.39,0.932c5.71-4.762,9.399-11.882,9.536-19.9C53.246,12.32,41.587,0.254,26.953,0.004z">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                            <a href="{{route('class')}}" class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-custom-color-2 u-btn-2">Class</a>
                            <span class="u-icon u-icon-circle u-icon-2">
                                <svg class="u-svg-link"
                                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 56 56" style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7425"></use>
                                </svg>
                                <svg class="u-svg-content" viewBox="0 0 56 56" x="0px" y="0px" id="svg-7425"
                                    style="enable-background:new 0 0 56 56;">
                                    <polygon style="fill:#61B872;" points="41,5 15,5 0,5 0,16 56,16 56,5 "></polygon>
                                    <circle style="fill:#50965C;" cx="19" cy="9" r="2"></circle>
                                    <circle style="fill:#50965C;" cx="25" cy="9" r="2"></circle>
                                    <circle style="fill:#50965C;" cx="31" cy="9" r="2"></circle>
                                    <circle style="fill:#50965C;" cx="37" cy="9" r="2"></circle>
                                    <rect y="16" style="fill:#EDEADA;" width="56" height="40"></rect>
                                    <g>
                                        <circle style="fill:#424A60;" cx="21" cy="24" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="28" cy="24" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="35" cy="24" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="42" cy="24" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="49" cy="24" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="7" cy="32" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="14" cy="32" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="21" cy="32" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="28" cy="32" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="35" cy="32" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="42" cy="32" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="49" cy="32" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="7" cy="39" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="14" cy="39" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="21" cy="39" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="28" cy="39" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="35" cy="39" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="42" cy="39" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="49" cy="39" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="7" cy="47" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="14" cy="47" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="21" cy="47" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="28" cy="47" r="1"></circle>
                                        <circle style="fill:#424A60;" cx="35" cy="47" r="1"></circle>
                                    </g>
                                    <path style="fill:#D8A852;"
                                        d="M37,0c-1.13,0-2.162,0.391-3,1.025c0.534,0.405,0.979,0.912,1.315,1.495C35.796,2.192,36.376,2,37,2c1.654,0,3,1.346,3,3s-1.346,3-3,3c-0.553,0-1,0.447-1,1s0.447,1,1,1c2.757,0,5-2.243,5-5S39.757,0,37,0z">
                                    </path>
                                    <path style="fill:#A37F46;"
                                        d="M32.685,2.52C32.261,3.254,32,4.093,32,5h2C34,3.97,33.478,3.061,32.685,2.52z">
                                    </path>
                                    <path style="fill:#A37F46;"
                                        d="M26.685,2.52C26.261,3.254,26,4.093,26,5h2C28,3.97,27.478,3.061,26.685,2.52z">
                                    </path>
                                    <path style="fill:#D8A852;"
                                        d="M35.315,2.52C34.979,1.937,34.534,1.43,34,1.025C33.162,0.391,32.13,0,31,0s-2.162,0.391-3,1.025c0.534,0.405,0.979,0.912,1.315,1.495C29.796,2.192,30.376,2,31,2s1.204,0.192,1.685,0.52C33.478,3.061,34,3.97,34,5c0,1.654-1.346,3-3,3c-0.553,0-1,0.447-1,1s0.447,1,1,1c2.757,0,5-2.243,5-5C36,4.093,35.739,3.254,35.315,2.52z">
                                    </path>
                                    <path style="fill:#A37F46;"
                                        d="M20.685,2.52C20.261,3.254,20,4.093,20,5h2C22,3.97,21.478,3.061,20.685,2.52z">
                                    </path>
                                    <path style="fill:#D8A852;"
                                        d="M29.315,2.52C28.979,1.937,28.534,1.43,28,1.025C27.162,0.391,26.13,0,25,0s-2.162,0.391-3,1.025c0.534,0.405,0.979,0.912,1.315,1.495C23.796,2.192,24.376,2,25,2s1.204,0.192,1.685,0.52C27.478,3.061,28,3.97,28,5c0,1.654-1.346,3-3,3c-0.553,0-1,0.447-1,1s0.447,1,1,1c2.757,0,5-2.243,5-5C30,4.093,29.739,3.254,29.315,2.52z">
                                    </path>
                                    <path style="fill:#D8A852;"
                                        d="M23.315,2.52C22.979,1.937,22.534,1.43,22,1.025C21.162,0.391,20.13,0,19,0c-2.757,0-5,2.243-5,5h2c0-1.654,1.346-3,3-3c0.624,0,1.204,0.192,1.685,0.52C21.478,3.061,22,3.97,22,5c0,1.654-1.346,3-3,3c-0.553,0-1,0.447-1,1s0.447,1,1,1c2.757,0,5-2.243,5-5C24,4.093,23.739,3.254,23.315,2.52z">
                                    </path>
                                </svg>
                            </span>
                            <a href="{{route('material')}}" class="u-border-none u-btn u-button-style u-custom-color-2 u-hover-custom-color-2 u-btn-3">Material</a>
                            <span class="u-icon u-icon-circle u-icon-3">
                                <svg class="u-svg-link"
                                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1465"></use>
                                </svg>
                                <svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-1465"
                                    style="enable-background:new 0 0 58 58;">
                                    <polygon style="fill:#EDEADA;" points="52,19 38,5 11,5 11,58 52,58 "></polygon>
                                    <polygon style="fill:#C1BCA4;" points="11,5 38,5 47,14 47,0 6,0 6,53 11,53 ">
                                    </polygon>
                                    <g>
                                        <path style="fill:#CEC9AE;"
                                            d="M19,26h25c0.552,0,1-0.447,1-1s-0.448-1-1-1H19c-0.552,0-1,0.447-1,1S18.448,26,19,26z">
                                        </path>
                                        <path style="fill:#CEC9AE;"
                                            d="M19,18h10c0.552,0,1-0.447,1-1s-0.448-1-1-1H19c-0.552,0-1,0.447-1,1S18.448,18,19,18z">
                                        </path>
                                        <path style="fill:#CEC9AE;"
                                            d="M44,32H19c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S44.552,32,44,32z">
                                        </path>
                                        <path style="fill:#CEC9AE;"
                                            d="M44,40H19c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S44.552,40,44,40z">
                                        </path>
                                        <path style="fill:#CEC9AE;"
                                            d="M44,48H19c-0.552,0-1,0.447-1,1s0.448,1,1,1h25c0.552,0,1-0.447,1-1S44.552,48,44,48z">
                                        </path>
                                    </g>
                                    <polygon style="fill:#CEC9AE;" points="38,5 38,19 52,19 "></polygon>
                                </svg>
                            </span>
                            <a href="#" onclick="logout();" class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-custom-color-2 u-btn-4">Logout</a>
                            <span class="u-icon u-icon-circle u-text-black u-icon-4">
                                <svg class="u-svg-link"
                                    preserveAspectRatio="xMidYMin slice" viewBox="0 0 492.5 492.5" style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9c12"></use>
                                </svg>
                                <svg class="u-svg-content" viewBox="0 0 492.5 492.5" x="0px" y="0px" id="svg-9c12"
                                    style="enable-background:new 0 0 492.5 492.5;">
                                    <g>
                                        <path
                                            d="M184.646,0v21.72H99.704v433.358h31.403V53.123h53.539V492.5l208.15-37.422v-61.235V37.5L184.646,0z M222.938,263.129   c-6.997,0-12.67-7.381-12.67-16.486c0-9.104,5.673-16.485,12.67-16.485s12.67,7.381,12.67,16.485   C235.608,255.748,229.935,263.129,222.938,263.129z">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>


                    <div class="u-container-style u-layout-cell u-right-cell u-size-45 u-layout-cell-2" src="">
                        <div class="u-container-layout u-container-layout-2">

                            @if($user->user_type == "praetorian")
                            <div class="w-full flex flex-row-reverse pr-12">
                                <a href="{{route('post')}}" class="px-4 py-2 rounded-md bg-blue-400 text-white hover:text-white">Add Material</a>
                            </div>
                            @endif

                            <div class="w-full flex flex-wrap">

                                @foreach($materials as $material)
                                <div style="width:calc(50% - 2rem);" class="bg-white rounded-xl border-gray-300 border border-solid overflow-hidden mr-4 my-4">
                                    @if($material->embed)
                                    <div class="w-100">
                                        <iframe src="{{$material->embed}}" class="border-none w-full" style="height: 16rem;"></iframe>
                                    </div>
                                    @endif
                                    <div class="p-4">
                                        <div class="text-sm text-gray-400">Session {{$material->session}} - {{$material->formated_SessionDate()}}</div>
                                        <div class="font-bold">{{$material->session_name}}</div>
                                        <div style="max-height: 12rem;" class="overflow-x-hidden overflow-y-auto">
                                            {!! $material->formated_content() !!}
                                        </div>
                                        @if($user->user_type == "praetorian")
                                        <form action="{{route('post', $material->id)}}" method="POST" enctype="application/x-www-form-urlencoded">
                                            @csrf
                                            @method('DELETE')
                                            <div class="flex flex-row-reverse">
                                                <button type="submit" class="text-red-500 hover:text-red-500 py-2 px-2 bg-transparent">Delete</button>
                                                <a href="{{route('post', $material->id)}}" class="text-blue-600 hover:text-blue-600 py-2 px-2">Edit Post</a>
                                            </div>
                                        </form>
                                        @endif
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-e090">
        <div class="u-align-left u-clearfix u-sheet u-sheet-1"></div>
    </footer>
    <section class="u-backlink u-clearfix u-grey-80">
    </section>

    <form id="frmLogout" action="{{route('logout')}}" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
    </form>

    <script>
        function logout(){
            frmLogout.submit();
        }
    </script>
</body>

</html>
