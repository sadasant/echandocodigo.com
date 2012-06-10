<!-- Content with podcasts -->
<style>
/* Pods */
.pod, .data, .title {
  -webkit-transition : all .7s ease 0s;
  -moz-transition    : all .7s ease 0s;
  -o-transition      : all .7s ease 0s;
  -ms-transition     : all .7s ease 0s;
  transition         : all .7s ease 0s;
}
.pod {
  background    : #250520;
  width         : 100%;
  max-width     : 380px;
  overflow      : hidden;
  float         : left;
  margin        : 5px 5px;
  color         : white;
  border-radius : 5px;
  font-family   : sans;
  -webkit-border-radius : 5px;
  -o-border-radius      : 5px;
  -ms-border-radius     : 5px;
}
.pod:hover {
  background  : #9f0f30;
}
.pod:hover .data {
  color : rgba(255,255,255,1);
}
.pod .title {
  padding       : 13px 20px 10px;
  white-space   : nowrap;
  text-overflow : ellipsis;
  overflow      : hidden;
  color         : white;
  font-weight   : bold;
  font-size     : 18px;
  border-radius : 5px 5px 0 0;
  -webkit-border-radius : 5px 5px 0 0;
  -o-border-radius      : 5px 5px 0 0;
  -ms-border-radius     : 5px 5px 0 0;
}
.pod .data {
  width         : 340px;
  padding       : 0 20px;
  font-size     : 13px;
  color         : rgba(255,255,255,.7);
  overflow      : hidden;
  border-radius : 0 0 5px 5px;
  -webkit-border-radius : 0 0 5px 5px;
  -o-border-radius      : 0 0 5px 5px;
  -ms-border-radius     : 0 0 5px 5px;
}
.pod .data table {
  font-size     : 13px;
  border-top    : 1px solid rgba(255,255,255,.1);
  border-bottom : 1px solid rgba(255,255,255,.1);
  width         : 100%;
  padding       : 5px 0;
  margin-bottom : 10px;
}
.pod .data table td {
  text-align : center;
}
.pod .data ul {
  padding-left : 10px;
  margin-top   : 5px;
}
.pod .data li {
  list-style : none
}
</style>
<div class="center">

  <div id="main-title">
    <div id="location">
      <a href="/"><img src="/img/ec32.png"/>EchandoCodigo.com/</a>
    </div>
    <div id="section">
      <a href="/pods/">pods/</a>
    </div>
    <br>
  </div>

  <div class="clearfix"></div>

  <?=$content()?>

  <div class="clearfix"></div>

  <br>
  <br>
</div>