<link rel="stylesheet" href="<?= base_url('assets/css/Home/Home.css') ?>">

<div class="album bg-body-tertiary" style="padding: 5%;">
    <div class="custom-card">
        <img src="https://placehold.co/200x200/png" alt="sample" class="card-img">
        <div class="custom-card-body">
            <a href="<?= base_url('Online_Resources/Faculty_Research_Journal') ?>" class="btn custom-btn-primary">DLRC Institutional Archive</a>
        </div>
    </div>

    <div class="custom-card">
        <img src="https://placehold.co/200x200/png" alt="sample" class="card-img">
        <div class="custom-card-body">
            <a href="#" class="btn custom-btn-primary">Web OPAC</a>
        </div>
    </div>

    <div class="custom-card">
        <img src="https://placehold.co/200x200/png" alt="sample" class="card-img">
        <div class="custom-card-body">
            <a href="#" class="btn custom-btn-primary">GALE</a>
        </div>
    </div>

    <div class="custom-card">
        <img src="https://placehold.co/200x200/png" alt="sample" class="card-img">
        <div class="custom-card-body">
            <a href="#" class="btn custom-btn-primary">OPEN RESOURCES</a>
        </div>
    </div>
</div>

<div class="custom-album" style="background-color: #bbbbbb;">
    <div class="vt-album-title">VIDEO TUTORIALS</div>

    <div class="card" data-video-url="https://stdominiccollege.edu.ph/SDCA_files/Videos/STDOMINIC%20CELOGIC%20VID%20(1).mp4">
        <div class="thumbnail">
            <img src="<?= base_url('assets/images/gray.jpg') ?>" alt="GALE Usage Instruction" class="thumbnail-img">
            <button class="play-button">&nbsp;▶</button>
        </div>
        <div class="card-body">
            <h5 class="card-title">GALE Usage Instruction</h5>
        </div>
    </div>

    <div class="card" data-video-url="https://stdominiccollege.edu.ph/SDCA_files/Videos/DLRC%20VIRTUAL%20TOUR%202021.mp4">
        <div class="thumbnail">
            <img src="<?= base_url('assets/images/gray.jpg') ?>" alt="Web OPAC" class="thumbnail-img">
            <button class="play-button">&nbsp;▶</button>
        </div>
        <div class="card-body">
            <h5 class="card-title">Web OPAC</h5>
        </div>
    </div>

    <div class="card" data-video-url="https://drive.google.com/uc?id=1JY8rjmBtUAMRDf6TDyFpC7pXvfLQ6zgf">
        <div class="thumbnail">
            <img src="<?= base_url('assets/images/gray.jpg') ?>" alt="TURNITIN Usage Instruction" class="thumbnail-img">
            <button class="play-button">&nbsp;▶</button>
        </div>
        <div class="card-body">
            <h5 class="card-title">TURNITIN Usage Instruction</h5>
        </div>
    </div>

    <div class="card" data-video-url="https://drive.google.com/uc?id=1nJDm2rrTxurQ4ZCL6SWlNzdwE0QIobf9">
        <div class="thumbnail">
            <img src="<?= base_url('assets/images/gray.jpg') ?>" alt="Web OPAC" class="thumbnail-img">
            <button class="play-button">&nbsp;▶</button>
        </div>
        <div class="card-body">
            <h5 class="card-title">LIBRARY Usage Instruction</h5>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal" id="videoModal" style="display:none;">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <video id="modalVideo" controls>
            <source id="videoSource" src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>
    
<div class="album bg-body-tertiary" style="padding: 5%;">
    <div class="na-album-title">
        NEW ACQUISITION
    </div>

    <div class="row" style="display: flex; justify-content: center;">
        <div class="col" style="width: 15rem; margin: 0 1rem;">
            <div class="row" style="
            width: fit-content;
            background-color:#A12124;
            color:white">
                <b>(SECTION)</b>
            </div>

            <div class="row" style="color: #A12124;">
                <a href="" style="
                width: max-content;
                color:#555555;">
                    <ul style="padding: 5% 0 0 0;">
                        <li class="pt-2"><b>BOOK TITLE</b> - AUTHOR</li>
                        <li class="pt-2"><b>BOOK TITLE</b> - AUTHOR</li>
                        <li class="pt-2"><b>BOOK TITLE</b> - AUTHOR</li>
                    </ul>
                </a>
            </div>
        </div>

        <div class="col" style="width: 15rem; margin: 0 1rem;">
            <div class="row" style="
            width: fit-content;
            background-color:#A12124;
            color:white">
                <b>(SECTION)</b>
            </div>

            <div class="row" style="color: #A12124;">
                <a href="" style="
                width: max-content;
                color:#555555;">
                    <ul style="padding: 5% 0 0 0;">
                        <li class="pt-2"><b>BOOK TITLE</b> - AUTHOR</li>
                        <li class="pt-2"><b>BOOK TITLE</b> - AUTHOR</li>
                        <li class="pt-2"><b>BOOK TITLE</b> - AUTHOR</li>
                    </ul>
                </a>
            </div>
        </div>

        <div class="col" style="width: 15rem; margin: 0 1rem;">
            <div class="row" style="
            width: fit-content;
            background-color:#A12124;
            color:white">
                <b>(SECTION)</b>
            </div>

            <div class="row" style="color: #A12124;">
                <a href="" style="
                width: max-content;
                color:#555555;">
                    <ul style="padding: 5% 0 0 0;">
                        <li class="pt-2"><b>BOOK TITLE</b> - AUTHOR</li>
                        <li class="pt-2"><b>BOOK TITLE</b> - AUTHOR</li>
                        <li class="pt-2"><b>BOOK TITLE</b> - AUTHOR</li>
                    </ul>
                </a>
            </div>
        </div>

        <div class="col" style="width: 15rem; margin: 0 1rem;">
            <div class="row" style="
            width: fit-content;
            background-color:#A12124;
            color:white">
                <b>(SECTION)</b>
            </div>

            <div class="row" style="color: #A12124;">
                <a href="" style="
                width: max-content;
                color:#555555;">
                    <ul style="padding: 5% 0 0 0;">
                        <li class="pt-2"><b>BOOK TITLE</b> - AUTHOR</li>
                        <li class="pt-2"><b>BOOK TITLE</b> - AUTHOR</li>
                        <li class="pt-2"><b>BOOK TITLE</b> - AUTHOR</li>
                    </ul>
                </a>    
            </div>
        </div>
    </div>


    </main>
    <script src="<?= base_url('assets/js/Home.js') ?>"></script>