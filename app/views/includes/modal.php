<?php $profile_path = "../../chitraprofile/" ?>

<div class="modalwrapper" id="">
</div>

<div class="modal" id="myModal">
  <div class="imageWrapper">
    <div>
      <a class="close"> <i class="uil uil-times-circle closebtn"></i></a>
    </div>
    <div class="imageDiv">
      <img class="modal-content modalImage" id="img01">
      <div class="imageContent">
        <div class="uploader">
          <div class="nav__profile-image">
            <img id="modalProfile" src="<?php echo $profile_path ?>" alt="avatar" />
          </div>
          <p class="modalUsername" id="modalUsername"></p>
        </div>
        <div class="caption">
          <span id="caption">cap</span>
        </div>
        <div class="imageInfo">
          <div class="imageActions">
            <button class="btn btn-primary">Download</button>
            <button class="btn btn-success" id="likeButton"><i class="uil uil-thumbs-up"></i></button>
          </div>
          <div>
            <span>Likes: </span><span id="likeCount"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
