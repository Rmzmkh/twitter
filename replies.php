<?php
require_once "backend/shared/main_header_functionality.php";
$date_joined=strtotime($profileData->signUpDate);

$pageTitle='Tweets with replies by '.$profileData->firstName.' '.$profileData->lastName.'(@'.$profileData->username.') / Twitter';

?>
<?php require_once 'backend/shared/header.php'; ?>
<div class="u-p-id" data-uid="<?php echo $user_id; ?>" data-pid="<?php echo $profileId; ?>"></div>
<section class="wrapper">
   <?php  require_once 'backend/shared/nav_header.php'; ?>
   <main role="main">
     <section class="mainSectionContainer">
        <?php require_once 'backend/shared/profile_header.php'; ?>
        <div class="tabsContainer">
          <?php echo $loadFromTweet->createTab('Tweets',url_for($profileData->username),false); ?>
          <?php echo $loadFromTweet->createTab('Tweets & replies',url_for($profileData->username.'/replies'),true); ?>
         
        </div>
        
        <section aria-label="Timeline:Your Profile Replies Timeline" class="repliesPostsContainer">
          <?php $loadFromTweet->repliesTweet($profileId,10); ?>
        </section>
        <div class="reply-wrapper">
         
        </div>
        <?php require_once 'backend/shared/previewContainer.php'; ?>
        <div class="d-wrapper-container">
           <div class="d-wrapper">
              <div class="d-content" id="del-content">
                 <div class="d-image">
                    <svg viewBox="0 0 24 24" class="del-icon"><g><path d="M20.746 5.236h-3.75V4.25c0-1.24-1.01-2.25-2.25-2.25h-5.5c-1.24 0-2.25 1.01-2.25 2.25v.986h-3.75c-.414 0-.75.336-.75.75s.336.75.75.75h.368l1.583 13.262c.216 1.193 1.31 2.027 2.658 2.027h8.282c1.35 0 2.442-.834 2.664-2.072l1.577-13.217h.368c.414 0 .75-.336.75-.75s-.335-.75-.75-.75zM8.496 4.25c0-.413.337-.75.75-.75h5.5c.413 0 .75.337.75.75v.986h-7V4.25zm8.822 15.48c-.1.55-.664.795-1.18.795H7.854c-.517 0-1.083-.246-1.175-.75L5.126 6.735h13.74L17.32 19.732z"></path><path d="M10 17.75c.414 0 .75-.336.75-.75v-7c0-.414-.336-.75-.75-.75s-.75.336-.75.75v7c0 .414.336.75.75.75zm4 0c.414 0 .75-.336.75-.75v-7c0-.414-.336-.75-.75-.75s-.75.336-.75.75v7c0 .414.336.75.75.75z"></path></g></svg>
                 </div>
                 <span class="d-text" style="color:rgb(224,36,94);">
                    Delete
                 </span>
              </div>
              <div class="d-content" id="pin-content">
                 <div class="d-image">
                 <svg viewBox="0 0 24 24" class="pin-icon"><g><path d="M20.472 14.738c-.388-1.808-2.24-3.517-3.908-4.246l-.474-4.307 1.344-2.016c.258-.387.28-.88.062-1.286-.218-.406-.64-.66-1.102-.66H7.54c-.46 0-.884.254-1.1.66-.22.407-.197.9.06 1.284l1.35 2.025-.42 4.3c-1.667.732-3.515 2.44-3.896 4.222-.066.267-.043.672.222 1.01.14.178.46.474 1.06.474h3.858l2.638 6.1c.12.273.39.45.688.45s.57-.177.688-.45l2.638-6.1h3.86c.6 0 .92-.297 1.058-.474.265-.34.288-.745.228-.988zM12 20.11l-1.692-3.912h3.384L12 20.11zm-6.896-5.413c.456-1.166 1.904-2.506 3.265-2.96l.46-.153.566-5.777-1.39-2.082h7.922l-1.39 2.08.637 5.78.456.153c1.355.45 2.796 1.78 3.264 2.96H5.104z"></path></g></svg>
                 </div>
                 <span class="d-text">
                    Pin to your profile
                 </span>
              </div>
           </div>
        </div>
        <div class="del-post-wrapper-container">
           <div class="del-post-wrapper">
              <div class="del-post-content">
                 <h2 class="del-post-content-header">Delete Tweet?</h2>
                 <p>This can???t be undone and it will be removed from your profile, the timeline of any accounts that follow you, and from Twitter search results.</p>
                 <div class="del-btn-wrapper">
                    <button class="del-btn" id="cancel" type="button">Cancel</button>
                    <button class="del-btn" id="delete-post-btn" type="button">Delete</button>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <aside role="complementary">
        Aside
     </aside>
   </main>
</section>
<script src="<?php echo url_for("frontend/assets/js/profile.js"); ?>"></script>
<script src="<?php echo url_for("frontend/assets/js/follow.js"); ?>"></script>
<script src="<?php echo url_for("frontend/assets/js/delete.js"); ?>"></script>
<script src="<?php echo url_for("frontend/assets/js/fetchTweet.js"); ?>"></script>
<script src="<?php echo url_for("frontend/assets/js/reply.js"); ?>"></script>
<script src="<?php echo url_for("frontend/assets/js/retweet.js"); ?>"></script>
<script src="<?php echo url_for("frontend/assets/js/likeTweet.js"); ?>"></script>
<script src="<?php echo url_for("frontend/assets/js/hashtag.js"); ?>"></script>
<script src="<?php echo url_for("frontend/assets/js/common.js"); ?>"></script>