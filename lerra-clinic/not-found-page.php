<?php require_once("./header.php")?>
<main>
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center" style="height: 100vh">
                <div class="col-md-6 col-12 justify-content-center align-items-center overflow-hidden">
                    <h1 style="font-size: 15em" class="text-center text-main d-none d-md-block">404</h1>
                    <h1 style="font-size: 10em" class="d-md-none text-center text-main">404</h1>

                    <hr class="text-main" />
                    <h2 class="text-center text-ttl">Page Not Found</h2>
                    <p class="text-ttl">The page does not exist or has been removed. You can use the search form on the side.</p>
                </div>

                <div class="col-md-6 col-12">
                    <div class="d-flex flex-column gap-2">
                        <h2 class="text-sub fw-bold fs-3">Search</h2>
                        <form>
                            <div class="pw-shdw-md rounded-1 overflow-hidden bg-white d-flex align-items-center">
                                <input type="text" placeholder="Search for smoething" class="text-sub flex-grow-1 border-0 outline-none py-3 px-4" />
                                <button type="submit" class="pe-4 ps-2 border-0 bg-transparent">
                                    <i class="fa-solid fa-magnifying-glass fs-4 text-sub"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require_once("./footer.php")?>
