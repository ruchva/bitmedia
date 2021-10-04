<div class="col-span-3 p-8 bg-gray-200">
    
    @json($commercials)
    
    <script>

        $(function(){
            // plugin init
            let url = "{{ asset('jquery-activmap/img/marker.png') }}";
            console.log(url);

            $('#activmap-wrapper').activmap({

                places: [
                    {title: 'Mercado Yungas', address: 'Calle Yungas, La Paz', tags: ['commercials_01'], lat: -16.4968082, lng: -68.1291852, img: '', icon: ''}, 
                    {title: 'Plaza Mayor de San Francisco', address: 'Av. Mariscal Santa Cruz, La Paz', tags: ['commercials_02'], lat: -16.4952231, lng: -68.1369322, img: '', icon: ''},
                    {title: 'Casa Municipal de la Cultura Franz Tamayo', address: 'Av. Mariscal Santa Cruz, esq. Potosí, La Paz', tags: ['commercials_03'], lat: -16.4952183, lng: -68.1364138, img: '', icon: ''}, 
                    {title: 'Mercado Lanza', address: 'Ingreso Calle Potosí, La Paz', tags: ['commercials_01'], lat: -16.4944305, lng: -68.1373839, img: '', icon: ''},
                    {title: '', address: '', tags: ['commercials_01'], lat: -16.4944305, lng: -68.1373839, img: '', icon: ''},
                ],
                icon: url,
                lat: -16.4956270,       //latitude of the center
                lng: -68.1335586,       //longitude of the center
                posPanel: 'left',
                showPanel: true,
                radius: 0,
                cluster: true,
                country: 'BO',
                mapType: 'roadmap',
                request: 'large',
                locationTypes: ['geocode','establishment']
            }); 
        });
    </script>
<!-- 
    PARAMETROS DEL MAPA

places 	        array or url of .json file 	            list of place objects {title, address, phone, tags, lat, lng, img} 	
lat 	        numeric 	                            latitude of the center 	51.499418
lng 	        numeric 	                            longitude of the center 	51.499418
zoom 	        integer [0-21] 	                        default zoom level on load 	
autogeolocate 	true or false 	                        enables / disables the auto geolocation on load to set the center of the map 	
cluster 	    true or false 	                        enables / disables clustering for large amounts of markers 	
mapType 	    "roadmap", "satellite", "perspective" 	as the name suggests 	
posPanel 	    "left" or "right" 	                    position of the removable panel 	
showPanel 	    true or false 	                        shows / hides the removable panel 	
radius 	        integer 	                            max radius around the position in kilometers 	20 for 20km
country 	    text (2 characters - ISO 3166-1) 	    to limit to 1 country (optional) 	"ca": Canada, "us": United States, "fr": France
styles 	        object 	map styles 	                    snazzy maps styles
request 	    "strict" or "large" 	                type of request on click - strict: display of the places which respect all the checked 
                                                        tags large: display of the places which respect one of the checked tags
locationTypes 	array Supported types: geocode,         types of locations returned by autocomplete requests 	e.g. ['geocode','establishment']
                address, establishment, (regions), 
                locality, sublocality, postal_code, 
                country, administrative_area_level_1, 
                administrative_area_level_2, (cities), 
                administrative_area_level_3 	
show_center 	true or false 	                        shows / hides the marker of the center of the map

    PARAMETROS DE LOS LUGARES

title 	        text 	                                title of the place 	Harrods
address 	    text 	                                address of the place 	87-135 Brompton Road London SW1X 7XL, United Kingdom
phone 	        text 	                                phone of the place 	+44 20 7730 1234
tags 	        array 	                                list of filters the place belongs to 	['shops_01','shops_02']
lat 	        numeric 	                            latitude of the marker 	51.499418
lng 	        numeric 	                            longitude of the marker  -0.163239
url 	        text 	                                URL of a website
img 	        text 	                                image path (logo, sign...) 	path/image.jpg
icon 	        text 	                                marker icon path 	path/icon.png
custom 	        text 	                                your own custom content (html) 	 
-->
    <div class="max-w-full mx-auto ">
        <div class="flex flex-wrap ">
            <div class="md:w-1/4 lg:w-1/4 pr-4 pl-4">
                <br>
                <div class="mb-4">
                    <div class="relative flex items-stretch w-full">
                        <!-- Optional: possibility for the user to change the center location -->
                        <input id="activmap-location" type="text" 
                               class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" 
                               name="location" value="" placeholder="Ubicacion...">
                        <span class="input-group-btn">
                            <!-- Optional: possibility for the user to reset all the map (location, radius, filters) -->
                            <a id="activmap-reset" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700" href="#">
                               <i class="fa fa-ban"></i> 
                               Limpiar
                            </a>
                        </span>
                    </div>
                </div>
                
                <!-- Optional: possibility for the user to be geolocated -->
                <a id="activmap-geolocate" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-default" href="#">
                    <i class="fa fa-crosshairs"></i> 
                    Localizacion
                </a>
                <!-- Optional: possibility for the user to target the results on the map -->
                <a id="activmap-target" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-default" href="#">
                    <i class="fa fa-bullseye"></i> 
                    Resultados
                </a>
                
                <div class="panel-body">
                    <input type="checkbox" name="marker_type[]" value="commercials_01"> Tipo 1<br>
                    <input type="checkbox" name="marker_type[]" value="commercials_02"> Tipo 2<br>
                    <input type="checkbox" name="marker_type[]" value="commercials_03"> Tipo 3<br>
                    <input type="checkbox" name="marker_type[]" value="commercials_04"> Tipo 4
                </div>                           
                
            </div>

            <div class="md:w-3/4 lg:w-3/4 pr-4 pl-4">
                <div id="activmap-wrapper">
                    <!-- Places panel (auto removable) -->
                    <div id="activmap-places" class="hidden-xs">
                        <div id="activmap-results-num"></div>
                    </div>
                    
                    <!-- Map container REQUIRED -->
                    <div id="activmap-container">
                        <div id="activmap-canvas"></div>
                    </div>
                </div>  
            </div>  
            
        </div>         
    </div>
</div>
<!-- todo el contenido debe ir dentro de este div padre -->
<!-- de lo contrario livewire no sabra como renderizar -->