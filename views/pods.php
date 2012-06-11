<style>
/* Pods */
.pod, .data, .title {
  -webkit-transition : all .7s ease 0s
; -moz-transition    : all .7s ease 0s
; -o-transition      : all .7s ease 0s
; -ms-transition     : all .7s ease 0s
; transition         : all .7s ease 0s
}
.pod {
  background    : #250520
; width         : 100%
; max-width     : 47%
; overflow      : hidden
; float         : left
; margin        : 5px 5px 25px
; color         : white
; font-family   : sans
; -webkit-border-radius : 6px
; -o-border-radius      : 6px
; -ms-border-radius     : 6px
; border-radius         : 6px
}
.pod:nth-child(even) {
  float : right
}
.pod:hover {
  background  : #9f0f30
}
.pod:hover .data {
  color : rgba(255,255,255,1)
}
.pod .title {
  padding       : 16px 5% 10px
; white-space   : nowrap
; text-overflow : ellipsis
; overflow      : hidden
; color         : white
; font-weight   : bold
; font-size     : 18px
; border-radius : 6px 6px 0 0
; -webkit-border-radius : 6px 6px 0 0
; -o-border-radius      : 6px 6px 0 0
; -ms-border-radius     : 6px 6px 0 0
}
.pod .data {
  width         : 90%
; padding       : 0 5% 16px
; font-size     : 13px
; color         : rgba(255,255,255,.7)
; overflow      : hidden
; border-radius : 0 0 6px 6px
; -webkit-border-radius : 0 0 6px 6px
; -o-border-radius      : 0 0 6px 6px
; -ms-border-radius     : 0 0 6px 6px
}
.pod .data table {
  font-size     : 13px
; border-top    : 1px solid rgba(255,255,255,.1)
; border-bottom : 1px solid rgba(255,255,255,.1)
; width         : 100%
; margin-bottom : 10px
}
.pod .data table td {
  text-align : center
; padding    : 5px
}
.pod .data ul {
  padding-left : 10px
; margin-top   : 5px
}
.pod .data li {
  list-style : none
}
</style>
<div class="section">

  <?=$content()?>

</div>
