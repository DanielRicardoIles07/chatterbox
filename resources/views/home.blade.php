@extends('layouts.home')
@section('title')
Babbler
@endsection
@section('body')
<style type="text/css">
  .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
<div class="cd fade" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="bln" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="d">
        <h5 class="modal-title">Messages</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>

      <div class="modal-body abv js-modalBody">
        <div class="att">
          <div class="bkt cj ca js-msgGroup">
            <a href="#" class="b os">
              <div class="oq">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-fat.jpg">
                <div class="or">
                  <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                  <div class="bld">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b os">
              <div class="oq">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-mdo.png">
                <div class="or">
                  <strong>Mark Otto</strong> and <strong>3 others</strong>
                  <div class="bld">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b os">
              <div class="oq">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-dhg.png">
                <div class="or">
                  <strong>Dave Gamache</strong>
                  <div class="bld">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b os">
              <div class="oq">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-fat.jpg">
                <div class="or">
                  <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                  <div class="bld">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b os">
              <div class="oq">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-mdo.png">
                <div class="or">
                  <strong>Mark Otto</strong> and <strong>3 others</strong>
                  <div class="bld">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b os">
              <div class="oq">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-dhg.png">
                <div class="or">
                  <strong>Dave Gamache</strong>
                  <div class="bld">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b os">
              <div class="oq">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-fat.jpg">
                <div class="or">
                  <strong>Jacob Thornton</strong> and <strong>1 other</strong>
                  <div class="bld">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam &hellip;
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b os">
              <div class="oq">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-mdo.png">
                <div class="or">
                  <strong>Mark Otto</strong> and <strong>3 others</strong>
                  <div class="bld">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
            <a href="#" class="b os">
              <div class="oq">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-dhg.png">
                <div class="or">
                  <strong>Dave Gamache</strong>
                  <div class="bld">
                    Brunch sustainable placeat vegan bicycle rights yeah…
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="ro aba js-conversation">
            <ul class="bkt bkz">
              <li class="oq blc abk">
                <div class="or">
                  <div class="bla">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                  </div>
                  <div class="blb">
                    <small class="asz">
                      <a href="#">Dave Gamache</a> at 4:20PM
                    </small>
                  </div>
                </div>
                <img class="rl bkp ru uk abe" src="assets/img/avatar-dhg.png">
              </li>

              <li class="oq abk">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-fat.jpg">
                <div class="or">
                  <div class="bla">
                   Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                  </div>
                  <div class="bla">
                   Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                  </div>
                  <div class="bla">
                   Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
                  </div>
                  <div class="blb">
                    <small class="asz">
                      <a href="#">Fat</a> at 4:28PM
                    </small>
                  </div>
                </div>
              </li>

              <li class="oq abk">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-mdo.png">
                <div class="or">
                  <div class="bla">
                   Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                  </div>
                  <div class="bla">
                   Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                  </div>
                  <div class="blb">
                    <small class="asz">
                      <a href="#">Mark Otto</a> at 4:20PM
                    </small>
                  </div>
                </div>
              </li>

              <li class="oq blc abk">
                <div class="or">
                  <div class="bla">
                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Maecenas sed diam eget risus varius blandit sit amet non magna. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.
                  </div>
                  <div class="blb">
                    <small class="asz">
                      <a href="#">Dave Gamache</a> at 4:20PM
                    </small>
                  </div>
                </div>
                <img class="rl bkp ru uk abe" src="assets/img/avatar-dhg.png">
              </li>

              <li class="oq abk">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-fat.jpg">
                <div class="or">
                  <div class="bla">
                   Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                  </div>
                  <div class="bla">
                   Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam quis risus eget urna mollis ornare vel eu leo. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                  </div>
                  <div class="bla">
                   Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.
                  </div>
                  <div class="blb">
                    <small class="asz">
                      <a href="#">Fat</a> at 4:28PM
                    </small>
                  </div>
                </div>
              </li>

              <li class="oq abk">
                <img class="rl bkp ru uk abc" src="assets/img/avatar-mdo.png">
                <div class="or">
                  <div class="bla">
                   Etiam porta sem malesuada magna mollis euismod. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Etiam porta sem malesuada magna mollis euismod. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.
                  </div>
                  <div class="bla">
                   Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
                  </div>
                  <div class="blb">
                    <small class="asz">
                      <a href="#">Mark Otto</a> at 4:20PM
                    </small>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="by acy adh">
  <div class="dp">
    <div class="fj">
      <div class="mu blf abk">
        <div class="na" style="background-image: url({{asset('img/lognavbar.png')}});" ></div>
        <div class="mv arx">
          <a >
            <img class="blg" data-width="640" data-height="640" data-action="zoom"
              src="{{asset('img/lognavbar.png')}}">
          </a>

          <h6 class="mw">
            <a class="bjx" href="profile/index.html">{{Auth::user()->name}}</a>
          </h6>

          <p class="abk"><a href="" style="color: red; text-decoration: none;">No hay informacion para mostrar</a></p>

          <ul class="blh">
            <li class="bli">
              <a href="#userModal" class="bjx" data-toggle="modal">
                Babblers
                <h6 class="aal">0</h6>
              </a>
            </li>

            <li class="bli">
              <a href="#userModal" class="bjx" data-toggle="modal">
                Lanzamientos
                <h6 class="aal">0</h6>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="cd fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="blo" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="d">
        <h4 class="modal-title">Users</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>

      <div class="modal-body abv">
        <div class="att">
          <ul class="bkt cj ca">
            <li class="b">
              <div class="oq zy">
                <img class="bkp ru uk abc" src="assets/img/avatar-fat.jpg">
                <div class="or">
                  <button class="cg kt ll zc">
                    <span class="c blp"></span> Follow
                  </button>
                  <strong>Jacob Thornton</strong>
                  <p>@fat - San Francisco</p>
                </div>
              </div>
            </li>
            <li class="b">
              <div class="oq zy">
                <img class="bkp ru uk abc" src="assets/img/avatar-dhg.png">
                <div class="or">
                  <button class="cg kt ll zc">
                    <span class="c blp"></span> Follow
                  </button>
                  <strong>Dave Gamache</strong>
                  <p>@dhg - Palo Alto</p>
                </div>
              </div>
            </li>
            <li class="b">
              <div class="oq zy">
                <img class="bkp ru uk abc" src="assets/img/avatar-mdo.png">
                <div class="or">
                  <button class="cg kt ll zc">
                    <span class="c blp"></span> Follow
                  </button>
                  <strong>Mark Otto</strong>
                  <p>@mdo - San Francisco</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
      <div class="mu sh sp abk">
        <div class="mv">
          <h6 class="abd">About <small>· <a href="#">Edit</a></small></h6>
          <ul class="dc atd">
            <li><span class="asz h awk abc"></span>Went to <a href="#">Oh, Canada</a>
            <li><span class="asz h biz abc"></span>Became friends with <a href="#">Obama</a>
            <li><span class="asz h bax abc"></span>Worked at <a href="#">Github</a>
            <li><span class="asz h bbn abc"></span>Lives in <a href="#">San Francisco, CA</a>
            <li><span class="asz h bcw abc"></span>From <a href="#">Seattle, WA</a>
          </ul>
        </div>
      </div>

       <div class="mu sh sp abk">
        <div class="mv">
          <h6 class="abd">Photos <small>· <a href="#">Edit</a></small></h6>
          <div data-grid="images" data-target-height="150">
            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="{{asset ('img/lognavbar.png')}}">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_6.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_7.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_8.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_9.jpg">
            </div>

            <div>
              <img data-width="640" data-height="640" data-action="zoom" src="assets/img/instagram_10.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fm">

      <ul class="ca bkt bku abk">

        <li class="oq b acx">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="¿Que deseas lanzar?...">
            <div class="jq">
              <button type="button" class="cg kt uo">
                <span class="btn btn-default btn-file">
                    <span class="h awl"></span> <input type="file">
                </span>
              </button>
            </div>
          </div>
        </li>

        <li class="oq b acx">
          <img
            class="bkp ru uk abc"
            src="assets/img/avatar-dhg.png">
          <div class="or">
            <div class="bky">
              <small class="zc asz">4 min</small>
              <h6>Dave Gamache</h6>
            </div>

            <p>
              Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            </p>

            <div class="bkv" data-grid="images">
              <div style="display: none">
                <img data-action="zoom" data-width="1050" data-height="700" src="assets/img/unsplash_1.jpg">
              </div>

              <div style="display: none">
                <img data-action="zoom" data-width="640" data-height="640" src="assets/img/instagram_1.jpg">
              </div>

              <div style="display: none">
                <img data-action="zoom" data-width="640" data-height="640" src="assets/img/instagram_13.jpg">
              </div>

              <div style="display: none">
                <img data-action="zoom" data-width="1048" data-height="700" src="assets/img/unsplash_2.jpg">
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="fj">
      <div class="alert oj alert-dismissible ro sp" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <center><a class="oe" href="profile/index.html" style="text-decoration: none;">Babblers</center><br> Mira la sección de tus babblers.</a>
      </div>

      <div class="mu abk ro sp">
        <div class="mv">
        <h6 class="abd">Babblers <small>· <a href="#">Ver todos</a></small></h6>
        <ul class="bkt bku">
          <li class="oq aaw">
            <img
              class="bkp ru uk abc"
              src="{{asset ('img/log2.png')}}">
            <div class="or">
              <strong>Jacob Thornton</strong> @fat
              <div class="bkx">
                <button class="cg la ll">
                  <span class="h auf"></span> Follow</button>
              </div>
            </div>
          </li>
          <li class="oq">
            <a class="blq" href="#">
              <img
                class="bkp ru uk abc"
                src="{{asset ('img/log2.png')}}">
            </a>
            <div class="or">
              <strong>Mark Otto</strong> @mdo
              <div class="bkx">
                <button class="cg la ll">
                  <span class="h auf"></span> Follow</button></button>
              </div>
            </div>
          </li>
        </ul>
        </div>
      </div>

      <div class="mu blj">
        <div class="mv">
          © 2018 Bootstrap
          <a href="#">About</a>
          <a href="#">Help</a>
          <a href="#">Terms</a>
          <a href="#">Privacy</a>
          <a href="#">Cookies</a>
          <a href="#">Ads </a>
          <a href="#">Info</a>
          <a href="#">Brand</a>
          <a href="#">Blog</a>
          <a href="#">Status</a>
          <a href="#">Apps</a>
          <a href="#">Jobs</a>
          <a href="#">Advertise</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mu blj">
        <div class="mv">
          © 2018 Bootstrap
          <a href="#">About</a>
          <a href="#">Help</a>
          <a href="#">Terms</a>
          <a href="#">Privacy</a>
          <a href="#">Cookies</a>
          <a href="#">Ads </a>
          <a href="#">Info</a>
          <a href="#">Brand</a>
          <a href="#">Blog</a>
          <a href="#">Status</a>
          <a href="#">Apps</a>
          <a href="#">Jobs</a>
          <a href="#">Advertise</a>
        </div>
      </div>
@endsection