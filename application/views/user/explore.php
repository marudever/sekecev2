<div style="margin-top:5%;background-color:#eeeeee;">

    <!-- HEADER -->
    <div style="padding-left:15%;padding-right:15%;">

    <form class="form-inline" method="GET" action="<?= base_url('pencarian/') ?>">
        <div class="input-group rounded">
            <input type="search" name="cari" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
                <i class="fa fa-search"></i>
            </span>
        </div>
    </form>
    
    </div>
    <!-- HEADER -->



    <!-- CONTENT -->
    <div>
    
        <div class="container-fluid" style="padding:2% 15% 2% 15%;">
        
        <div class="row row-cols-1 row-cols-md-3">
        <?php foreach($artikel as $art): ?>
        <div class="col mb-4">
            <!-- Card -->
            <div class="card">

            <!--Card image-->
            <div class="view overlay">
                <img class="img-fluid card-img-top" src="<?= base_url('assets/thumbnail/'.$art->gambar) ?>"
                alt="Card image cap">
                <a href="<?= base_url('artikel/'.$art->slug) ?>">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!--Card content-->
            <div class="card-body">

                <!--Title-->
                <h4 class="card-title"><?= $art->judul ?></h4>

            </div>

            </div>
            <!-- Card -->
        </div>
        <?php endforeach; ?>
        
        </div>
        
        </div>
    
    </div>
    <!-- CONTENT -->

</div>