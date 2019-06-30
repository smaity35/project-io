<?php include('header.php');?>

  <section class="profile-header" style="background-image: url('images/img1.jpg')">
    <div class="container">
      <div class="profile-contents">
        <div class="profile-img" style="background-image: url('images/t3.jpg')"></div>
        <div class="content-box">
          <h2>Issa Rae Presents is creating Series, Films, Events</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="about-page-wrap">
      <div class="container">
        <div class="about-top-part">
            <ul class="clearfix">
              <li class="tabs active"><a data-toggle="tab" href="#menu0">Overview</a></li>
              <li class="tabs"><a data-toggle="tab" href="#menu1">Posts</a></li>
             
              <li class="tab-last"><a data-toggle="tab" href="#menu2">Become a patron</a></li>
            </ul>

        </div>
        <div class="tab-content">
          <div id="menu0" class="tab-pane fade in active">            

            <div class="row">
              <div class="col-md-3">
                <div class="title sec-9">
                  <h2>6,530</h2>
                  <p>patrons</p>
                  <div class="btn-wrap">
                    <button><i class="ion ion-md-add"></i> Follow</button>
                    <button><i class="ion ion-md-share-alt"></i> Share</button>
                  </div>
                  <ul class="social-links">
                    <li><a href=""><i class="ion ion-logo-facebook"></i></a></li>
                    <li><a href=""><i class="ion ion-logo-twitter"></i></a></li>
                    <li><a href=""><i class="ion ion-logo-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="title overview-tile1">
                      <iframe  src="https://www.youtube.com/embed/F4ZRW7scGOE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <p>
                        My most popular web series, The Misadventures of Awkward Black Girl was a HUGE success because of you. I will always and forever be grateful to those who contributed to, watched and shared our series. Because of you, we were one of the first web series of color to launch a successful crowdfunding campaign. 
                      </p>
                      <p>
                        Because of you, we are proud to give writers, directors and producers of color an opportunity to have their work seen by thousands of people through our monthly showcase, #ShortFilmSundays. 
                      </p>
                      <p>
                        Become a <b>patron</b> of Issa Rae Productions today. 
                      </p>
                  </div>

                  <div class="posts-head">
                    <h4>RECENT POSTS BY ISSA RAE PRESENTS</h4>
                  </div>

                  <div class="title overview-tile2">
                    <table>
                        <tr>

                            <td>
                                <i class="material-icons">lock_open</i>
                            </td>

                            <td>
                                <p>
                                  See more today! If you <a href="">become a patron</a> to <b>Issa Rae Presents</b>, you’ll immediately get access to as many as 99 patron-only posts.
                                </p>
                            </td>

                        </tr>
                        
                    </table>
                  </div>
                  <?php
                      for($i=1; $i<=25; $i++){
                  ?>
                  <div class="title overview-tile3">
                     <div class="imag-area" >
                       <a href="" style="background-image: url('images/img3.jpg')">
                         <div>
                           <i class="material-icons">lock</i>
                           <p>Unlock this <br>by becoming a patron</p>
                           <button>Join now for $50 per month</button>
                         </div>
                       </a>
                     </div>
                     <div class="content-area">
                       <div class="date-lock">
                         <span><a href="">Apr 16 at 8:31am</a></span>
                         <div class="lock"><span><i class="material-icons">lock</i> Locked</span>
                          <div class="loc-status">
                           <h4>Who can see this post</h4>
                           <ul>
                             <li>Exclusive IRP Patron</li>
                             <li>Premier IRP Patron</li>
                           </ul>
                         
                         </div>
                         </div class="lock">
                         
                       </div>
                       <div class="post-title">
                         <a href="">Color Creative Masterclass with James Bland: The Giant of Momentum (Episode 4)</a>
                       </div>
                       <div class="class-tag">
                        <a href=""><i class="material-icons">turned_in_not</i>
                         Master Class</a>
                       </div>
                       <div class="comment-like">
                         <div class="comment"><a href="">2 Comments</a></div>
                         <div class="like"><span>6 Likes</span>
                          <div class="cont">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                          </div>
                         </div>
                       </div>
                     </div>
                  </div>
                  <?php } ?>
                  
              </div>
              <div class="col-md-3">
                  <!-- <div class="big-btn">
                      <button class="active" disabled>Save Changes</button>
                  </div> -->
                  <div class="title sec-5">
                      <h6>TIERS</h6>
                      <hr>
                      <h4>Get all the updates</h4>
                      <p>$3 or more per month</p>

                      <ul class="list-type-2">
                          <li><a href="">Blog posts and updates</a></li>
                          <li><a href="">Occasional shaky VLOGs</a></li>
                          <li><a href="">A tiny gift in the mail once a year-ish</a></li>
                      </ul>
                      <div class="link"><a href="">Join $3 Tier</a></div>
                      <hr>
                      <h4>All the updates plus extra glory</h4>
                      <p>$5 or more per month</p>
                      <ul class="list-type-2">
                          <li><a href="">Blog posts and updates</a></li>
                          <li><a href="">Occasional shaky VLOGs</a></li>
                          <li><a href="">A tiny gift in the mail once a year-ish</a></li>
                          <li><a href="">Putting your name in the jar for giveaways</a></li>
                          <li><a href="">Eternal glory</a></li>
                      </ul>
                      <div class="link"><a href="">Join $5 Tier</a></div>
                  </div>
              </div>
            </div>

          </div>
          <div id="menu1" class="tab-pane fade">
            <div class="row">
              <div class="col-md-3">
                <div class="title sec-10">
                  <h3>FILTER  <a href="">All Posts</a></h3>
                  <hr>

                  <div class="filter-list">
                    <select>
                      <option hidden value="Filter by tier" >Filter by tier</option>
                      <option value="All Patrons (106)" >All Patrons (106)</option>
                      <?php
                          for($i=1; $i<=10; $i++){
                      ?>
                        <option value="Public (6)">Public (6)</option>
                      <?php } ?>
                    </select>
                  </div>

                  <div class="filter-list">
                    <input type="date" name="" placeholder="Filter by month">
                  </div>

                  <div class="filter-list">
                    <select>
                      <option hidden value="Sort by date, newest first">Sort by date, newest first</option>
                      <?php
                          for($i=1; $i<=6; $i++){
                      ?>
                      <option value="Newest first">Newest first</option>
                      <?php } ?>
                    </select>
                  </div>

                </div>
              </div>
              <div class="col-md-6">
    

                  <div class="title overview-tile2">
                    <table>
                        <tr>

                            <td>
                                <i class="material-icons">lock_open</i>
                            </td>

                            <td>
                                <p>
                                  See more today! If you <a href="">become a patron</a> to <b>Issa Rae Presents</b>, you’ll immediately get access to as many as 99 patron-only posts.
                                </p>
                            </td>

                        </tr>
                        
                    </table>
                  </div>
                  <?php
                      for($i=1; $i<=25; $i++){
                  ?>
                  <div class="title overview-tile3">
                     <div class="imag-area" >
                       <a href="" style="background-image: url('images/img4.jpg')">
                         <div>
                           <i class="material-icons">lock</i>
                           <p>Unlock this <br>by becoming a patron</p>
                           <button>Join now </button>
                         </div>
                       </a>
                     </div>
                     <div class="content-area">
                       <div class="date-lock">
                         <span><a href="">Apr 16 at 8:31am</a></span>
                         <div class="lock"><span><i class="material-icons">lock</i> Locked</span>
                          <div class="loc-status">
                           <h4>Who can see this post</h4>
                           <ul>
                             <li>Exclusive IRP Patron</li>
                             <li>Premier IRP Patron</li>
                           </ul>
                         
                         </div>
                         </div class="lock">
                         
                       </div>
                       <div class="post-title">
                         <a href="">Color Creative Masterclass with James Bland: The Giant of Momentum (Episode 4)</a>
                       </div>
                       <div class="class-tag">
                        <a href=""><i class="material-icons">turned_in_not</i>
                         Master Class</a>
                       </div>
                       <div class="comment-like">
                         <div class="comment"><a href="">2 Comments</a></div>
                         <div class="like"><span>6 Likes</span>
                          <div class="cont">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                          </div>
                         </div>
                       </div>
                     </div>
                  </div>
                  <?php } ?>
                  
              </div>
              <div class="col-md-3">
                  <!-- <div class="big-btn">
                      <button class="active" disabled>Save Changes</button>
                  </div> -->
                  <div class="title sec-5">
                      <h6>TIERS</h6>
                      <hr>
                      <h4>Get all the updates</h4>
                      <p>$3 or more per month</p>

                      <ul class="list-type-2">
                          <li><a href="">Blog posts and updates</a></li>
                          <li><a href="">Occasional shaky VLOGs</a></li>
                          <li><a href="">A tiny gift in the mail once a year-ish</a></li>
                      </ul>
                      <div class="link"><a href="">Join $3 Tier</a></div>
                      <hr>
                      <h4>All the updates plus extra glory</h4>
                      <p>$5 or more per month</p>
                      <ul class="list-type-2">
                          <li><a href="">Blog posts and updates</a></li>
                          <li><a href="">Occasional shaky VLOGs</a></li>
                          <li><a href="">A tiny gift in the mail once a year-ish</a></li>
                          <li><a href="">Putting your name in the jar for giveaways</a></li>
                          <li><a href="">Eternal glory</a></li>
                      </ul>
                      <div class="link"><a href="">Join $5 Tier</a></div>
                  </div>
              </div>
            </div>
          </div>
       
          <div id="menu2" class="tab-pane fade">
            <div class="row bpat">
              <div class="col-md-6 ">
                <div class="title sec-11">
                    <h5>Get all the updates</h5>
                    <h3>$3</h3>
                    <h4>PER MONTH</h4>
                    <ul>
                      <li>Blog posts and updates</li>
                      <li>Occasional shaky VLOGs</li>
                      <li>A tiny gift in the mail once a year-ish</li>                      
                     
                    </ul>
                    <div class="link"><a href="">Select</a></div>
                </div>
              </div>

              <div class="col-md-6 ">
                <div class="title sec-11">
                    <h5>All the updates plus extra glory</h5>
                    <h3>$5</h3>
                    <h4>PER MONTH</h4>
                    <ul>
                      <li>Blog posts and updates</li>
                      <li>Occasional shaky VLOGs</li>
                      <li>A tiny gift in the mail once a year-ish</li>
                      <li>Putting your name in the jar for giveaways</li>
                      <li>Eternal glory</li>
                    </ul>

                    <div class="link"><a href="">Select</a></div>
                </div>
              </div>
             
            </div>
          </div>
        </div>

          
      </div>
  </section>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="ion ion-md-close"></i></button>
        <h4 class="modal-title">UPGRADE TO PRO</h4>
      </div>
      <div class="modal-body">
        <p>Get all the tools you need to grow your membership business and delight your fans. The cost for Pro is 8% of your Patreon earnings.</p>
        <p>
            Please confirm that you would like to upgrade.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="cancel-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="extra-btn" >Upgrade to Pro</button>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php');?>


