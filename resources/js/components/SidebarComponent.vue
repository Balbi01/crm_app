<template>
    <div class="h-max">
        <div class="flex">    
            <div class="flex flex-wrap flex-col justify-between w-64 h-screen border">
                <div class="flex flex-col">
                    <!-- Icono y titulo -->
                    <div id="title" class="
                        flex 
                        items-center 
                        bg-scampi-blue 
                        h-16 
                        pl-4
                    ">
                        <!-- <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 1024 1024"><path fill="currentColor" d="M518.3 459a8 8 0 0 0-12.6 0l-112 141.7a7.98 7.98 0 0 0 6.3 12.9h73.9V856c0 4.4 3.6 8 8 8h60c4.4 0 8-3.6 8-8V613.7H624c6.7 0 10.4-7.7 6.3-12.9L518.3 459z"/><path fill="currentColor" d="M811.4 366.7C765.6 245.9 648.9 160 512.2 160S258.8 245.8 213 366.6C127.3 389.1 64 467.2 64 560c0 110.5 89.5 200 199.9 200H304c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8h-40.1c-33.7 0-65.4-13.4-89-37.7c-23.5-24.2-36-56.8-34.9-90.6c.9-26.4 9.9-51.2 26.2-72.1c16.7-21.3 40.1-36.8 66.1-43.7l37.9-9.9l13.9-36.6c8.6-22.8 20.6-44.1 35.7-63.4a245.6 245.6 0 0 1 52.4-49.9c41.1-28.9 89.5-44.2 140-44.2s98.9 15.3 140 44.2c19.9 14 37.5 30.8 52.4 49.9c15.1 19.3 27.1 40.7 35.7 63.4l13.8 36.5l37.8 10C846.1 454.5 884 503.8 884 560c0 33.1-12.9 64.3-36.3 87.7a123.07 123.07 0 0 1-87.6 36.3H720c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h40.1C870.5 760 960 670.5 960 560c0-92.7-63.1-170.7-148.6-193.3z"/></svg>
                        </div> -->
                        <div class="black 
                            align-middle
                            flex-1
                            font-bold
                            text-2xl
                            ml-4
                            mt-2
                            ">
                            BALBWARE
                        </div>
                    </div>

                    <!-- Buscador -->
                    <div class="input input-bordered flex m-2 items-center gap-2">
                        <input type="text" class="grow" placeholder="Buscar" />
                    </div>

                    <!-- Menu principal lateral -->
                    <div class="flex m-2 ">
                        <ul class="flex menu bg-scampi-white rounded-box w-full">

                            <!-- Botón de clientes -->
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                            <circle cx="9" cy="7" r="4"/>
                                            <path d="M22 21v-2a4 4 0 0 0-3-3.87m-3-12a4 4 0 0 1 0 7.75"/>
                                        </g>
                                    </svg>
                                    <a class="align-middle">Clientes</a>
                                </div>
                            </li>

                            <!-- Botón prospectos -->
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                                        <path fill="currentColor" d="M8 8h2v4H8zm0 6h2v4H8zm6-6h2v4h-2zm0 6h2v4h-2zm-6 6h2v4H8zm6 0h2v4h-2z"/>
                                        <path fill="currentColor" d="M30 14a2 2 0 0 0-2-2h-6V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v26h28ZM4 4h16v24H4Zm18 24V14h6v14Z"/>
                                    </svg>
                                    <a class="align-middle">Prospectos</a>
                                </div>
                            </li>
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 2048 2048">
                                        <path fill="currentColor" d="m960 120l832 416v1040l-832 415l-832-415V536l832-416zm625 456L960 264L719 384l621 314l245-122zM960 888l238-118l-622-314l-241 120l625 312zM256 680v816l640 320v-816L256 680zm768 1136l640-320V680l-640 320v816z"/>
                                    </svg>
                                    <a class="align-middle">Productos y Servicios</a>
                                </div>
                            </li>
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 8 8">
                                        <path fill="currentColor" d="M3 0v1h-.75C1.57 1 1 1.57 1 2.25v.5c0 .68.44 1.24 1.09 1.41l2.56.66c.14.04.34.29.34.44v.5c0 .14-.11.25-.25.25h-2.5a.56.56 0 0 1-.25-.06v-.94h-1v1c0 .34.2.63.44.78c.23.16.52.22.81.22h.75v1h1v-1h.75c.69 0 1.25-.56 1.25-1.25v-.5c0-.68-.44-1.24-1.09-1.41l-2.56-.66C2.2 3.15 2 2.9 2 2.75v-.5c0-.14.11-.25.25-.25h2.5c.11 0 .21.04.25.06V3h1V2c0-.34-.2-.63-.44-.78c-.23-.16-.52-.22-.81-.22H4V0H3z"/>
                                    </svg>
                                    <a class="align-middle">Vendedores</a>
                                </div>
                            </li>
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14 14">
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M7 11.5v2m2.5-3v2m-5-2v2m8-12h-11a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1"/>
                                            <path d="M7 6.25a1.75 1.75 0 1 0 0-3.5a1.75 1.75 0 0 0 0 3.5m-4.225-1.5a.25.25 0 0 1 0-.5m0 .5a.25.25 0 0 0 0-.5m8.45.5a.25.25 0 1 1 0-.5m0 .5a.25.25 0 1 0 0-.5"/>
                                        </g>
                                    </svg>
                                    <a class="align-middle">Pagos</a>
                                </div>
                            </li>
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M2 21V7l10-4l10 4v14h-6v-8H8v8H2Zm7 0v-2h2v2H9Zm2-3v-2h2v2h-2Zm2 3v-2h2v2h-2Z"/>
                                    </svg>
                                    <a class="align-middle">Inventario</a>
                                </div>
                            </li>
                            <li class="flex font-bold">
                                <div class="flex h-12 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7ZM6.5 7.5a5.5 5.5 0 1 1 11 0a5.5 5.5 0 0 1-11 0ZM3 19a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v3H3v-3Zm5-3a3 3 0 0 0-3 3v1h14v-1a3 3 0 0 0-3-3H8Z"/></svg>
                                    <a class="align-middle">Usuarios</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Menu Final -->
                <div id="closeS" class="flex mb-2">
                    <ul class="flex menu rounded-box w-full">
                        <li class="flex font-bold">
                            <div class="flex h-12 items-center">
                                <a class="align-middle">Ajustes</a>
                            </div>
                        </li>
                        <li class="flex font-bold">
                            <div class="flex h-12 items-center">
                                <a class="align-middle text-red-500">Cerrar Sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

const SideBarComponent = {

}

export default SideBarComponent;
</script>