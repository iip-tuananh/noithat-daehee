@extends('layouts.main.master')
@section('title')
   {{ $setting->company }}
@endsection
@section('description')
   {{ $setting->webname }}
@endsection
@section('image')
   {{ url('' . $setting->logo) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
   <main>
      <section id="about">
            <link rel="preload" href="https://w.ladicdn.com/v2/source/ladipage.vi.min.js?v=1653875791278" as="script">
            <style id="style_ladi" type="text/css">
               a,
               abbr,
               acronym,
               address,
               applet,
               article,
               aside,
               audio,
               b,
               big,
               blockquote,
               body,
               button,
               canvas,
               caption,
               center,
               cite,
               code,
               dd,
               del,
               details,
               dfn,
               div,
               dl,
               dt,
               em,
               embed,
               fieldset,
               figcaption,
               figure,
               footer,
               form,
               h1,
               h2,
               h3,
               h4,
               h5,
               h6,
               header,
               hgroup,
               html,
               i,
               iframe,
               img,
               input,
               ins,
               kbd,
               label,
               legend,
               li,
               mark,
               menu,
               nav,
               object,
               ol,
               output,
               p,
               pre,
               q,
               ruby,
               s,
               samp,
               section,
               select,
               small,
               span,
               strike,
               strong,
               sub,
               summary,
               sup,
               table,
               tbody,
               td,
               textarea,
               tfoot,
               th,
               thead,
               time,
               tr,
               tt,
               u,
               ul,
               var,
               video {
                  margin: 0;
                  padding: 0;
                  border: 0;
                  outline: 0;
                  font-size: 100%;
                  font: inherit;
                  vertical-align: baseline;
                  box-sizing: border-box;
                  -webkit-font-smoothing: antialiased;
                  -moz-osx-font-smoothing: grayscale
               }

               article,
               aside,
               details,
               figcaption,
               figure,
               footer,
               header,
               hgroup,
               menu,
               nav,
               section {
                  display: block
               }

               body {
                  line-height: 1
               }

               a {
                  text-decoration: none
               }

               ol,
               ul {
                  list-style: none
               }

               blockquote,
               q {
                  quotes: none
               }

               blockquote:after,
               blockquote:before,
               q:after,
               q:before {
                  content: '';
                  content: none
               }

               table {
                  border-collapse: collapse;
                  border-spacing: 0
               }

               .ladi-html strong {
                  font-weight: 700
               }

               .ladi-html em {
                  font-style: italic
               }

               .ladi-html a {
                  text-decoration: underline
               }

               body {
                  font-size: 12px;
                  -ms-text-size-adjust: none;
                  -moz-text-size-adjust: none;
                  -o-text-size-adjust: none;
                  -webkit-text-size-adjust: none;
                  background: #fff
               }

               .ladi-loading {
                  width: 80px;
                  height: 80px;
                  z-index: 900000000000;
                  position: fixed;
                  top: 0;
                  left: 0;
                  bottom: 0;
                  right: 0;
                  margin: auto;
                  overflow: hidden
               }

               .ladi-loading div {
                  position: absolute;
                  width: 6px;
                  height: 6px;
                  background: #fff;
                  border-radius: 50%;
                  animation: ladi-loading 1.2s linear infinite
               }

               .ladi-loading div:nth-child(1) {
                  animation-delay: 0s;
                  top: 37px;
                  left: 66px
               }

               .ladi-loading div:nth-child(2) {
                  animation-delay: -.1s;
                  top: 22px;
                  left: 62px
               }

               .ladi-loading div:nth-child(3) {
                  animation-delay: -.2s;
                  top: 11px;
                  left: 52px
               }

               .ladi-loading div:nth-child(4) {
                  animation-delay: -.3s;
                  top: 7px;
                  left: 37px
               }

               .ladi-loading div:nth-child(5) {
                  animation-delay: -.4s;
                  top: 11px;
                  left: 22px
               }

               .ladi-loading div:nth-child(6) {
                  animation-delay: -.5s;
                  top: 22px;
                  left: 11px
               }

               .ladi-loading div:nth-child(7) {
                  animation-delay: -.6s;
                  top: 37px;
                  left: 7px
               }

               .ladi-loading div:nth-child(8) {
                  animation-delay: -.7s;
                  top: 52px;
                  left: 11px
               }

               .ladi-loading div:nth-child(9) {
                  animation-delay: -.8s;
                  top: 62px;
                  left: 22px
               }

               .ladi-loading div:nth-child(10) {
                  animation-delay: -.9s;
                  top: 66px;
                  left: 37px
               }

               .ladi-loading div:nth-child(11) {
                  animation-delay: -1s;
                  top: 62px;
                  left: 52px
               }

               .ladi-loading div:nth-child(12) {
                  animation-delay: -1.1s;
                  top: 52px;
                  left: 62px
               }

               @keyframes ladi-loading {

                  0%,
                  100%,
                  20%,
                  80% {
                        transform: scale(1)
                  }

                  50% {
                        transform: scale(1.5)
                  }
               }

               .overflow-hidden {
                  overflow: hidden
               }

               .ladi-transition {
                  transition: all 150ms linear 0s
               }

               .opacity-0 {
                  opacity: 0
               }

               .height-0 {
                  height: 0 !important
               }

               .transition-readmore {
                  transition: height 350ms linear 0s
               }

               .transition-collapse {
                  transition: height 150ms linear 0s
               }

               .transition-parent-collapse-height {
                  transition: height 150ms linear 0s
               }

               .transition-parent-collapse-top {
                  transition: top 150ms linear 0s
               }

               .pointer-events-none {
                  pointer-events: none
               }

               .ladi-google-recaptcha-checkbox {
                  position: absolute;
                  display: inline-block;
                  transform: translateY(-100%);
                  margin-top: -5px;
                  z-index: 90000010
               }

               .ladipage-message {
                  position: fixed;
                  width: 100%;
                  height: 100%;
                  top: 0;
                  left: 0;
                  z-index: 10000000000;
                  background: rgba(0, 0, 0, .3)
               }

               .ladipage-message .ladipage-message-box {
                  width: 400px;
                  max-width: calc(100% - 50px);
                  height: 160px;
                  border: 1px solid rgba(0, 0, 0, .3);
                  background-color: #fff;
                  position: fixed;
                  top: calc(50% - 155px);
                  left: 0;
                  right: 0;
                  margin: auto;
                  border-radius: 10px
               }

               .ladipage-message .ladipage-message-box span {
                  display: block;
                  background-color: rgba(6, 21, 40, .05);
                  color: #000;
                  padding: 12px 15px;
                  font-weight: 600;
                  font-size: 16px;
                  line-height: 16px;
                  border-top-left-radius: 10px;
                  border-top-right-radius: 10px
               }

               .ladipage-message .ladipage-message-box .ladipage-message-text {
                  display: -webkit-box;
                  font-size: 14px;
                  padding: 0 20px;
                  margin-top: 10px;
                  line-height: 18px;
                  -webkit-line-clamp: 3;
                  -webkit-box-orient: vertical;
                  overflow: hidden;
                  text-overflow: ellipsis
               }

               .ladipage-message .ladipage-message-box .ladipage-message-close {
                  display: block;
                  position: absolute;
                  right: 15px;
                  bottom: 10px;
                  margin: 0 auto;
                  padding: 10px 0;
                  border: none;
                  width: 80px;
                  text-transform: uppercase;
                  text-align: center;
                  color: #000;
                  background-color: #e6e6e6;
                  border-radius: 5px;
                  text-decoration: none;
                  font-size: 14px;
                  line-height: 14px;
                  font-weight: 600;
                  cursor: pointer
               }

               .ladi-wraper {
                  width: 100%;
                  height: 100%;
                  min-height: 100vh;
                  overflow: hidden
               }

               .ladi-section {
                  margin: 0 auto;
                  position: relative
               }

               .ladi-section[data-tab-id] {
                  display: none
               }

               .ladi-section.selected[data-tab-id] {
                  display: block
               }

               .ladi-section .ladi-section-arrow-down {
                  position: absolute;
                  bottom: 0;
                  right: 0;
                  left: 0;
                  margin: auto;
                  cursor: pointer;
                  z-index: 90000040
               }

               .ladi-section .ladi-section-close {
                  position: absolute;
                  top: 0;
                  right: 0;
                  cursor: pointer;
                  z-index: 90000040
               }

               .ladi-section .ladi-section-background {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  top: 0;
                  left: 0;
                  pointer-events: none;
                  overflow: hidden
               }

               .ladi-container {
                  position: relative;
                  margin: 0 auto;
                  height: 100%
               }

               .ladi-element {
                  position: absolute
               }

               .ladi-overlay {
                  position: absolute;
                  top: 0;
                  left: 0;
                  height: 100%;
                  width: 100%;
                  pointer-events: none
               }

               .ladi-survey {
                  width: 100%;
                  display: inline-block
               }

               .ladi-survey .ladi-survey-option {
                  cursor: pointer;
                  position: relative;
                  display: inline-block;
                  text-decoration-line: inherit;
                  -webkit-text-decoration-line: inherit;
                  transition: inherit;
                  user-select: none;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none
               }

               .ladi-survey .ladi-survey-option-background {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  top: 0;
                  left: 0;
                  pointer-events: none;
                  transition: inherit
               }

               .ladi-survey .ladi-survey-option-label {
                  display: block;
                  text-decoration-line: inherit;
                  -webkit-text-decoration-line: inherit;
                  position: relative
               }

               .ladi-survey .ladi-survey-option-image {
                  background-size: cover;
                  background-position: center center;
                  pointer-events: none;
                  vertical-align: middle;
                  border-radius: inherit;
                  position: relative
               }

               .ladi-survey .ladi-survey-button-next {
                  display: block
               }

               .ladi-survey .ladi-survey-button-next.empty {
                  display: none
               }

               .ladi-survey .ladi-survey-button-next.no-select {
                  display: none
               }

               .ladi-survey .ladi-survey-button-next button {
                  background-color: #fff;
                  border: 1px solid #eee;
                  padding: 5px 10px;
                  cursor: pointer;
                  border-radius: 2px
               }

               .ladi-survey .ladi-survey-button-next button:active {
                  transform: translateY(2px);
                  transition: transform .2s linear
               }

               .ladi-carousel {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  overflow: hidden;
                  touch-action: pan-y
               }

               .ladi-carousel .ladi-carousel-content {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  left: 0;
                  transition: left 350ms ease-in-out
               }

               .ladi-carousel .ladi-carousel-arrow {
                  position: absolute;
                  top: calc(50% - (33px)/ 2);
                  cursor: pointer;
                  z-index: 90000040
               }

               .ladi-carousel .ladi-carousel-arrow-left {
                  left: 5px;
                  transform: rotate(180deg);
                  -webkit-transform: rotate(180deg)
               }

               .ladi-carousel .ladi-carousel-arrow-right {
                  right: 5px
               }

               .ladi-gallery {
                  position: absolute;
                  width: 100%;
                  height: 100%
               }

               .ladi-gallery .ladi-gallery-view {
                  position: absolute;
                  overflow: hidden;
                  touch-action: pan-y
               }

               .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item {
                  background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center center;
                  width: 100%;
                  height: 100%;
                  position: relative;
                  display: none;
                  transition: transform .5s ease-in-out;
                  -webkit-backface-visibility: hidden;
                  backface-visibility: hidden;
                  -webkit-perspective: 1000px;
                  perspective: 1000px
               }

               .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.play-video {
                  cursor: pointer
               }

               .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.play-video:after {
                  content: '';
                  position: absolute;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  margin: auto;
                  width: 60px;
                  height: 60px;
                  background: url(https://w.ladicdn.com/source/ladipage-play.svg) no-repeat center center;
                  background-size: contain;
                  pointer-events: none;
                  cursor: pointer
               }

               .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.next,
               .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected.right {
                  left: 0;
                  transform: translate3d(100%, 0, 0)
               }

               .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.prev,
               .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected.left {
                  left: 0;
                  transform: translate3d(-100%, 0, 0)
               }

               .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.next.left,
               .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.prev.right,
               .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item.selected {
                  left: 0;
                  transform: translate3d(0, 0, 0)
               }

               .ladi-gallery .ladi-gallery-view>.next,
               .ladi-gallery .ladi-gallery-view>.prev,
               .ladi-gallery .ladi-gallery-view>.selected {
                  display: block
               }

               .ladi-gallery .ladi-gallery-view>.selected {
                  left: 0
               }

               .ladi-gallery .ladi-gallery-view>.next,
               .ladi-gallery .ladi-gallery-view>.prev {
                  position: absolute;
                  top: 0;
                  width: 100%
               }

               .ladi-gallery .ladi-gallery-view>.next {
                  left: 100%
               }

               .ladi-gallery .ladi-gallery-view>.prev {
                  left: -100%
               }

               .ladi-gallery .ladi-gallery-view>.next.left,
               .ladi-gallery .ladi-gallery-view>.prev.right {
                  left: 0
               }

               .ladi-gallery .ladi-gallery-view>.selected.left {
                  left: -100%
               }

               .ladi-gallery .ladi-gallery-view>.selected.right {
                  left: 100%
               }

               .ladi-gallery .ladi-gallery-control {
                  position: absolute;
                  overflow: hidden;
                  touch-action: pan-y
               }

               .ladi-gallery.ladi-gallery-top .ladi-gallery-view {
                  width: 100%
               }

               .ladi-gallery.ladi-gallery-top .ladi-gallery-control {
                  top: 0;
                  width: 100%
               }

               .ladi-gallery.ladi-gallery-bottom .ladi-gallery-view {
                  top: 0;
                  width: 100%
               }

               .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control {
                  width: 100%;
                  bottom: 0
               }

               .ladi-gallery.ladi-gallery-left .ladi-gallery-view {
                  height: 100%
               }

               .ladi-gallery.ladi-gallery-left .ladi-gallery-control {
                  height: 100%
               }

               .ladi-gallery.ladi-gallery-right .ladi-gallery-view {
                  height: 100%
               }

               .ladi-gallery.ladi-gallery-right .ladi-gallery-control {
                  height: 100%;
                  right: 0
               }

               .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow {
                  position: absolute;
                  top: calc(50% - (33px)/ 2);
                  cursor: pointer;
                  z-index: 90000040
               }

               .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-left {
                  left: 5px;
                  transform: rotate(180deg);
                  -webkit-transform: rotate(180deg)
               }

               .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow-right {
                  right: 5px
               }

               .ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow {
                  position: absolute;
                  cursor: pointer;
                  z-index: 90000040
               }

               .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow,
               .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow {
                  top: calc(50% - (33px)/ 2)
               }

               .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow-left {
                  left: 0;
                  transform: rotate(180deg) scale(.6);
                  -webkit-transform: rotate(180deg) scale(.6)
               }

               .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-arrow-right {
                  right: 0;
                  transform: scale(.6);
                  -webkit-transform: scale(.6)
               }

               .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-left {
                  left: 0;
                  transform: rotate(180deg) scale(.6);
                  -webkit-transform: rotate(180deg) scale(.6)
               }

               .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-arrow-right {
                  right: 0;
                  transform: scale(.6);
                  -webkit-transform: scale(.6)
               }

               .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow,
               .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow {
                  left: calc(50% - (33px)/ 2)
               }

               .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow-left {
                  top: 0;
                  transform: scale(.6) rotate(270deg);
                  -webkit-transform: scale(.6) rotate(270deg)
               }

               .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-arrow-right {
                  bottom: 0;
                  transform: scale(.6) rotate(90deg);
                  -webkit-transform: scale(.6) rotate(90deg)
               }

               .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow-left {
                  top: 0;
                  transform: scale(.6) rotate(270deg);
                  -webkit-transform: scale(.6) rotate(270deg)
               }

               .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-arrow-right {
                  bottom: 0;
                  transform: scale(.6) rotate(90deg);
                  -webkit-transform: scale(.6) rotate(90deg)
               }

               .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box {
                  position: relative
               }

               .ladi-gallery.ladi-gallery-top .ladi-gallery-control .ladi-gallery-control-box {
                  display: -webkit-inline-flex;
                  display: inline-flex;
                  left: 0;
                  transition: left 150ms ease-in-out
               }

               .ladi-gallery.ladi-gallery-bottom .ladi-gallery-control .ladi-gallery-control-box {
                  display: -webkit-inline-flex;
                  display: inline-flex;
                  left: 0;
                  transition: left 150ms ease-in-out
               }

               .ladi-gallery.ladi-gallery-left .ladi-gallery-control .ladi-gallery-control-box {
                  display: inline-grid;
                  top: 0;
                  transition: top 150ms ease-in-out
               }

               .ladi-gallery.ladi-gallery-right .ladi-gallery-control .ladi-gallery-control-box {
                  display: inline-grid;
                  top: 0;
                  transition: top 150ms ease-in-out
               }

               .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item {
                  background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center center;
                  float: left;
                  position: relative;
                  cursor: pointer;
                  filter: invert(15%)
               }

               .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.play-video:after {
                  content: '';
                  position: absolute;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  margin: auto;
                  width: 30px;
                  height: 30px;
                  background: url(https://w.ladicdn.com/source/ladipage-play.svg) no-repeat center center;
                  background-size: contain;
                  pointer-events: none;
                  cursor: pointer
               }

               .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:hover {
                  filter: none
               }

               .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item.selected {
                  filter: none
               }

               .ladi-gallery .ladi-gallery-control .ladi-gallery-control-box .ladi-gallery-control-item:last-child {
                  margin-right: 0 !important;
                  margin-bottom: 0 !important
               }

               .ladi-table {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  overflow: auto
               }

               .ladi-table table {
                  width: 100%
               }

               .ladi-table table td {
                  vertical-align: middle
               }

               .ladi-table tbody td {
                  word-break: break-word
               }

               .ladi-table table td img {
                  cursor: pointer;
                  width: 100%
               }

               .ladi-box {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  overflow: hidden
               }

               .ladi-tabs {
                  position: absolute;
                  width: 100%;
                  height: 100%
               }

               .ladi-tabs .ladi-tabs-background {
                  height: 100%;
                  width: 100%;
                  pointer-events: none
               }

               .ladi-tabs>.ladi-element[data-index] {
                  display: none
               }

               .ladi-tabs>.ladi-element.selected[data-index] {
                  display: block
               }

               .ladi-frame {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  overflow: hidden
               }

               .ladi-frame .ladi-frame-background {
                  height: 100%;
                  width: 100%;
                  pointer-events: none;
                  transition: inherit
               }

               .ladi-banner {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  overflow: hidden
               }

               .ladi-banner .ladi-banner-background {
                  height: 100%;
                  width: 100%;
                  pointer-events: none
               }

               #SECTION_POPUP .ladi-container {
                  z-index: 90000070
               }

               #SECTION_POPUP .ladi-container>.ladi-element {
                  z-index: 90000070;
                  position: fixed;
                  display: none
               }

               #SECTION_POPUP .ladi-container>.ladi-element[data-fixed-close=true] {
                  position: relative !important
               }

               #SECTION_POPUP .ladi-container>.ladi-element.hide-visibility {
                  display: block !important;
                  visibility: hidden !important
               }

               #SECTION_POPUP .popup-close {
                  position: absolute;
                  right: 0;
                  top: 0;
                  z-index: 9000000080;
                  cursor: pointer
               }

               .ladi-popup {
                  position: absolute;
                  width: 100%;
                  height: 100%
               }

               .ladi-popup .ladi-popup-background {
                  height: 100%;
                  width: 100%;
                  pointer-events: none
               }

               .ladi-countdown {
                  position: absolute;
                  width: 100%;
                  height: 100%
               }

               .ladi-countdown .ladi-countdown-background {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  top: 0;
                  left: 0;
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit;
                  display: table;
                  pointer-events: none
               }

               .ladi-countdown .ladi-countdown-text {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  text-decoration: inherit;
                  display: table;
                  pointer-events: none
               }

               .ladi-countdown .ladi-countdown-text span {
                  display: table-cell;
                  vertical-align: middle
               }

               .ladi-countdown>.ladi-element {
                  text-decoration: inherit;
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit;
                  position: relative;
                  display: inline-block
               }

               .ladi-countdown>.ladi-element:last-child {
                  margin-right: 0 !important
               }

               .ladi-button {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  overflow: hidden
               }

               .ladi-button:active {
                  transform: translateY(2px);
                  transition: transform .2s linear
               }

               .ladi-button .ladi-button-background {
                  height: 100%;
                  width: 100%;
                  pointer-events: none;
                  transition: inherit
               }

               .ladi-button>.ladi-element {
                  width: 100% !important;
                  height: 100% !important;
                  top: 0 !important;
                  left: 0 !important;
                  display: table;
                  user-select: none;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none
               }

               .ladi-button>.ladi-element .ladi-headline {
                  display: table-cell;
                  vertical-align: middle
               }

               .ladi-collection {
                  position: absolute;
                  width: 100%;
                  height: 100%
               }

               .ladi-collection.carousel {
                  overflow: hidden
               }

               .ladi-collection .ladi-collection-content {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  left: 0;
                  transition: left 350ms ease-in-out
               }

               .ladi-collection .ladi-collection-content .ladi-collection-item {
                  display: block;
                  position: relative;
                  float: left
               }

               .ladi-collection .ladi-collection-content .ladi-collection-page {
                  float: left
               }

               .ladi-collection .ladi-collection-arrow {
                  position: absolute;
                  top: calc(50% - (33px)/ 2);
                  cursor: pointer;
                  z-index: 90000040
               }

               .ladi-collection .ladi-collection-arrow-left {
                  left: 5px;
                  transform: rotate(180deg);
                  -webkit-transform: rotate(180deg)
               }

               .ladi-collection .ladi-collection-arrow-right {
                  right: 5px
               }

               .ladi-collection .ladi-collection-button-next {
                  position: absolute;
                  bottom: -40px;
                  right: 0;
                  left: 0;
                  margin: auto;
                  cursor: pointer;
                  z-index: 90000040;
                  transform: rotate(90deg);
                  -webkit-transform: rotate(90deg)
               }

               .ladi-form {
                  position: absolute;
                  width: 100%;
                  height: 100%
               }

               .ladi-form>.ladi-element {
                  text-transform: inherit;
                  text-decoration: inherit;
                  text-align: inherit;
                  letter-spacing: inherit;
                  color: inherit;
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit
               }

               .ladi-form .ladi-button>.ladi-element {
                  color: initial;
                  font-size: initial;
                  font-weight: initial;
                  text-transform: initial;
                  text-decoration: initial;
                  font-style: initial;
                  text-align: initial;
                  letter-spacing: initial;
                  line-height: initial
               }

               .ladi-form>.ladi-element .ladi-form-item-container {
                  text-transform: inherit;
                  text-decoration: inherit;
                  text-align: inherit;
                  letter-spacing: inherit;
                  color: inherit;
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit
               }

               .ladi-form>[data-quantity=true] .ladi-form-item-container {
                  overflow: hidden
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item {
                  text-transform: inherit;
                  text-decoration: inherit;
                  text-align: inherit;
                  letter-spacing: inherit;
                  color: inherit
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item-background {
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
                  -webkit-appearance: none;
                  -moz-appearance: none;
                  appearance: none;
                  background-size: 9px 6px !important;
                  background-position: right .5rem center;
                  background-repeat: no-repeat
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-2 {
                  width: calc(100% / 2 - 5px);
                  max-width: calc(100% / 2 - 5px);
                  min-width: calc(100% / 2 - 5px)
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-2:nth-child(3) {
                  margin-left: 7.5px
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3 {
                  width: calc(100% / 3 - 5px);
                  max-width: calc(100% / 3 - 5px);
                  min-width: calc(100% / 3 - 5px)
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(3) {
                  margin-left: 7.5px
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select-3:nth-child(4) {
                  margin-left: 7.5px
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select option {
                  color: initial
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control:not(.ladi-form-control-select) {
                  text-transform: inherit;
                  text-decoration: inherit;
                  text-align: inherit;
                  letter-spacing: inherit;
                  color: inherit;
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select {
                  text-transform: inherit;
                  text-align: inherit;
                  letter-spacing: inherit;
                  color: inherit;
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-control-select:not([data-selected=""]) {
                  text-decoration: inherit
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item {
                  text-transform: inherit;
                  text-decoration: inherit;
                  text-align: inherit;
                  letter-spacing: inherit;
                  color: inherit;
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit;
                  vertical-align: middle
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span {
                  user-select: none;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked=true] {
                  text-transform: inherit;
                  text-decoration: inherit;
                  text-align: inherit;
                  letter-spacing: inherit;
                  color: inherit;
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item .ladi-form-checkbox-item span[data-checked=false] {
                  text-transform: inherit;
                  text-align: inherit;
                  letter-spacing: inherit;
                  color: inherit;
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit
               }

               .ladi-form .ladi-form-item-container {
                  position: absolute;
                  width: 100%;
                  height: 100%
               }

               .ladi-form .ladi-form-item-title-value {
                  font-weight: 700;
                  word-break: break-word
               }

               .ladi-form .ladi-form-label-container {
                  position: relative;
                  width: 100%
               }

               .ladi-form .ladi-form-label-container .ladi-form-label-item {
                  display: inline-block;
                  cursor: pointer;
                  position: relative;
                  border-radius: 0 !important;
                  user-select: none;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none
               }

               .ladi-form .ladi-form-label-container .ladi-form-label-item.image {
                  background-size: cover;
                  background-repeat: no-repeat;
                  background-position: center
               }

               .ladi-form .ladi-form-label-container .ladi-form-label-item.no-value {
                  display: none !important
               }

               .ladi-form .ladi-form-label-container .ladi-form-label-item.text.disabled {
                  opacity: .35
               }

               .ladi-form .ladi-form-label-container .ladi-form-label-item.image.disabled {
                  opacity: .2
               }

               .ladi-form .ladi-form-label-container .ladi-form-label-item.color.disabled {
                  opacity: .15
               }

               .ladi-form .ladi-form-label-container .ladi-form-label-item.selected:before {
                  content: '';
                  width: 0;
                  height: 0;
                  bottom: -1px;
                  right: -1px;
                  position: absolute;
                  border-width: 0 0 15px 15px;
                  border-color: transparent;
                  border-style: solid
               }

               .ladi-form .ladi-form-label-container .ladi-form-label-item.selected:after {
                  content: '';
                  background-image: url("data:image/svg+xml;utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 12 12' viewBox='0 0 12 12' x='0' fill='%23fff' y='0'%3E%3Cg%3E%3Cpath d='m5.2 10.9c-.2 0-.5-.1-.7-.2l-4.2-3.7c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l3.4 3 5.1-7c .3-.4 1-.5 1.4-.2s.5 1 .2 1.4l-5.7 7.9c-.2.2-.4.4-.7.4 0-.1 0-.1-.1-.1z'%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
                  background-repeat: no-repeat;
                  background-position: bottom right;
                  width: 7px;
                  height: 7px;
                  bottom: 0;
                  right: 0;
                  position: absolute
               }

               .ladi-form .ladi-form-item {
                  width: 100%;
                  height: 100%;
                  position: absolute
               }

               .ladi-form .ladi-form-item-background {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  top: 0;
                  left: 0;
                  pointer-events: none
               }

               .ladi-form .ladi-form-item.ladi-form-checkbox {
                  height: auto
               }

               .ladi-form .ladi-form-item .ladi-form-control {
                  background-color: transparent;
                  min-width: 100%;
                  min-height: 100%;
                  max-width: 100%;
                  max-height: 100%;
                  width: 100%;
                  height: 100%;
                  padding: 0 5px;
                  color: inherit;
                  font-size: inherit;
                  border: none
               }

               .ladi-form .ladi-form-item.ladi-form-checkbox {
                  padding: 10px 5px
               }

               .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-vertical .ladi-form-checkbox-item {
                  margin-top: 0 !important;
                  margin-left: 0 !important;
                  margin-right: 0 !important;
                  display: table;
                  border: none
               }

               .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item {
                  margin-top: 0 !important;
                  margin-left: 0 !important;
                  margin-right: 10px !important;
                  display: inline-block;
                  border: none;
                  position: relative
               }

               .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item input {
                  vertical-align: middle;
                  width: 13px;
                  height: 13px;
                  display: table-cell;
                  margin-right: 5px
               }

               .ladi-form .ladi-form-item.ladi-form-checkbox .ladi-form-checkbox-item span {
                  display: table-cell;
                  cursor: default;
                  vertical-align: middle;
                  word-break: break-word
               }

               .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item input {
                  position: absolute;
                  top: 4px
               }

               .ladi-form .ladi-form-item.ladi-form-checkbox.ladi-form-checkbox-horizontal .ladi-form-checkbox-item span {
                  padding-left: 18px
               }

               .ladi-form .ladi-form-item textarea.ladi-form-control {
                  resize: none;
                  padding: 5px
               }

               .ladi-form .ladi-button {
                  cursor: pointer
               }

               .ladi-form .ladi-button .ladi-headline {
                  cursor: pointer;
                  user-select: none
               }

               .ladi-combobox {
                  position: absolute;
                  width: 100%;
                  height: 100%
               }

               .ladi-combobox .ladi-combobox-item-container {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  text-transform: inherit;
                  text-decoration: inherit;
                  text-align: inherit;
                  letter-spacing: inherit;
                  color: inherit;
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit
               }

               .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item-background {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  top: 0;
                  left: 0;
                  pointer-events: none;
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit
               }

               .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item {
                  width: 100%;
                  height: 100%;
                  position: absolute;
                  text-transform: inherit;
                  text-decoration: inherit;
                  text-align: inherit;
                  letter-spacing: inherit;
                  color: inherit
               }

               .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item .ladi-combobox-control option {
                  color: initial
               }

               .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item .ladi-combobox-control {
                  background-color: transparent;
                  min-width: 100%;
                  min-height: 100%;
                  max-width: 100%;
                  max-height: 100%;
                  width: 100%;
                  height: 100%;
                  padding: 0 5px;
                  font-size: inherit;
                  border: none;
                  text-transform: inherit;
                  text-align: inherit;
                  letter-spacing: inherit;
                  color: inherit;
                  background-size: inherit;
                  background-attachment: inherit;
                  background-origin: inherit;
                  -webkit-appearance: none;
                  -moz-appearance: none;
                  appearance: none;
                  background-size: 9px 6px !important;
                  background-position: right .5rem center;
                  background-repeat: no-repeat
               }

               .ladi-combobox .ladi-combobox-item-container .ladi-combobox-item .ladi-combobox-control:not([data-selected=""]) {
                  text-decoration: inherit
               }

               .ladi-cart {
                  position: absolute;
                  width: 100%;
                  font-size: 12px
               }

               .ladi-cart .ladi-cart-row {
                  position: relative;
                  display: inline-table;
                  width: 100%
               }

               .ladi-cart .ladi-cart-row:after {
                  content: '';
                  position: absolute;
                  left: 0;
                  bottom: 0;
                  height: 1px;
                  width: 100%;
                  background: #dcdcdc
               }

               .ladi-cart .ladi-cart-no-product {
                  text-align: center;
                  font-size: 16px;
                  vertical-align: middle
               }

               .ladi-cart .ladi-cart-image {
                  width: 16%;
                  vertical-align: middle;
                  position: relative;
                  text-align: center
               }

               .ladi-cart .ladi-cart-image img {
                  max-width: 100%
               }

               .ladi-cart .ladi-cart-title {
                  vertical-align: middle;
                  padding: 0 5px;
                  word-break: break-all
               }

               .ladi-cart .ladi-cart-title .ladi-cart-title-name {
                  display: block;
                  margin-bottom: 5px;
                  word-break: break-word
               }

               .ladi-cart .ladi-cart-title .ladi-cart-title-variant {
                  font-weight: 700;
                  display: block;
                  word-break: break-word
               }

               .ladi-cart .ladi-cart-image .ladi-cart-image-quantity {
                  position: absolute;
                  top: -3px;
                  right: -5px;
                  background: rgba(150, 149, 149, .9);
                  width: 20px;
                  height: 20px;
                  border-radius: 50%;
                  text-align: center;
                  color: #fff;
                  line-height: 20px
               }

               .ladi-cart .ladi-cart-quantity {
                  width: 70px;
                  vertical-align: middle;
                  text-align: center
               }

               .ladi-cart .ladi-cart-quantity-content {
                  display: -webkit-inline-flex;
                  display: inline-flex
               }

               .ladi-cart .ladi-cart-quantity input {
                  width: 24px;
                  text-align: center;
                  height: 22px;
                  -moz-appearance: textfield;
                  border-top: 1px solid #dcdcdc;
                  border-bottom: 1px solid #dcdcdc
               }

               .ladi-cart .ladi-cart-quantity input::-webkit-inner-spin-button,
               .ladi-cart .ladi-cart-quantity input::-webkit-outer-spin-button {
                  -webkit-appearance: none;
                  margin: 0
               }

               .ladi-cart .ladi-cart-quantity button {
                  border: 1px solid #dcdcdc;
                  cursor: pointer;
                  text-align: center;
                  width: 21px;
                  height: 22px;
                  position: relative;
                  user-select: none;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none
               }

               .ladi-cart .ladi-cart-quantity button:active {
                  transform: translateY(2px);
                  transition: transform .2s linear
               }

               .ladi-cart .ladi-cart-quantity button span {
                  font-size: 18px;
                  position: relative;
                  left: .5px
               }

               .ladi-cart .ladi-cart-quantity button:first-child span {
                  top: -1.2px
               }

               .ladi-cart .ladi-cart-price {
                  width: 100px;
                  vertical-align: middle;
                  text-align: right;
                  padding: 0 10px 0 5px
               }

               .ladi-cart .ladi-cart-row.has-promotion .ladi-cart-price span {
                  text-decoration: line-through;
                  display: block;
                  margin-bottom: 3px
               }

               .ladi-cart .ladi-cart-row.has-promotion .ladi-cart-price span.price-compare {
                  text-decoration: none;
                  color: #e85d04;
                  font-weight: 700;
                  margin-bottom: 0
               }

               .ladi-cart .ladi-cart-row.has-promotion .ladi-cart-title span.promotion-name {
                  margin-top: 5px;
                  display: block;
                  word-break: break-word
               }

               .ladi-cart .ladi-cart-action {
                  width: 28px;
                  vertical-align: middle;
                  text-align: center
               }

               .ladi-cart .ladi-cart-action button {
                  border: 1px solid #dcdcdc;
                  cursor: pointer;
                  text-align: center;
                  width: 25px;
                  height: 22px;
                  user-select: none;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none
               }

               .ladi-cart .ladi-cart-action button:active {
                  transform: translateY(2px);
                  transition: transform .2s linear
               }

               .ladi-cart .ladi-cart-action button span {
                  font-size: 13px;
                  position: relative;
                  top: .5px
               }

               .ladi-video {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  cursor: pointer;
                  overflow: hidden
               }

               .ladi-video .ladi-video-background {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  top: 0;
                  left: 0;
                  pointer-events: none
               }

               .ladi-group {
                  position: absolute;
                  width: 100%;
                  height: 100%
               }

               .ladi-button-group {
                  position: absolute;
                  width: 100%;
                  height: 100%
               }

               .ladi-button-group>.ladi-element {
                  transition: inherit
               }

               .ladi-button-group>.ladi-element>.ladi-button {
                  transition: inherit
               }

               .ladi-shape {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  pointer-events: none
               }

               .ladi-html-code {
                  position: absolute;
                  width: 100%;
                  height: 100%
               }

               .ladi-image {
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  overflow: hidden;
                  pointer-events: none
               }

               .ladi-image .ladi-image-background {
                  background-repeat: no-repeat;
                  background-position: left top;
                  background-size: cover;
                  background-attachment: scroll;
                  background-origin: content-box;
                  position: absolute;
                  margin: 0 auto;
                  width: 100%;
                  height: 100%;
                  pointer-events: none
               }

               .ladi-headline {
                  width: 100%;
                  display: inline-block;
                  background-size: cover;
                  background-position: center center
               }

               .ladi-headline a {
                  text-decoration: underline
               }

               .ladi-paragraph {
                  width: 100%;
                  display: inline-block
               }

               .ladi-paragraph a {
                  text-decoration: underline
               }

               .ladi-list-paragraph {
                  width: 100%;
                  display: inline-block
               }

               .ladi-list-paragraph a {
                  text-decoration: underline
               }

               .ladi-list-paragraph ul li {
                  position: relative;
                  counter-increment: linum
               }

               .ladi-list-paragraph ul li:before {
                  position: absolute;
                  background-repeat: no-repeat;
                  background-size: 100% 100%;
                  left: 0
               }

               .ladi-list-paragraph ul li:last-child {
                  padding-bottom: 0 !important
               }

               .ladi-line {
                  position: relative
               }

               .ladi-line .ladi-line-container {
                  border-bottom: 0 !important;
                  border-right: 0 !important;
                  width: 100%;
                  height: 100%
               }

               a[data-action] {
                  user-select: none;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none;
                  cursor: pointer
               }

               a:visited {
                  color: inherit
               }

               a:link {
                  color: inherit
               }

               .button-unmute {
                  cursor: pointer;
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  margin: auto
               }

               .button-unmute div {
                  background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2036%2036%22%20width%3D%22100%25%22%20height%3D%22100%25%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22m%2021.48%2C17.98%20c%200%2C-1.77%20-1.02%2C-3.29%20-2.5%2C-4.03%20v%202.21%20l%202.45%2C2.45%20c%20.03%2C-0.2%20.05%2C-0.41%20.05%2C-0.63%20z%20m%202.5%2C0%20c%200%2C.94%20-0.2%2C1.82%20-0.54%2C2.64%20l%201.51%2C1.51%20c%20.66%2C-1.24%201.03%2C-2.65%201.03%2C-4.15%200%2C-4.28%20-2.99%2C-7.86%20-7%2C-8.76%20v%202.05%20c%202.89%2C.86%205%2C3.54%205%2C6.71%20z%20M%209.25%2C8.98%20l%20-1.27%2C1.26%204.72%2C4.73%20H%207.98%20v%206%20H%2011.98%20l%205%2C5%20v%20-6.73%20l%204.25%2C4.25%20c%20-0.67%2C.52%20-1.42%2C.93%20-2.25%2C1.18%20v%202.06%20c%201.38%2C-0.31%202.63%2C-0.95%203.69%2C-1.81%20l%202.04%2C2.05%201.27%2C-1.27%20-9%2C-9%20-7.72%2C-7.72%20z%20m%207.72%2C.99%20-2.09%2C2.08%202.09%2C2.09%20V%209.98%20z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  width: 60px;
                  height: 60px;
                  position: absolute;
                  top: 0;
                  left: 0;
                  bottom: 0;
                  right: 0;
                  margin: auto;
                  background-color: rgba(0, 0, 0, .5);
                  border-radius: 100%;
                  background-size: 90%;
                  background-repeat: no-repeat;
                  background-position: center center
               }

               [data-opacity="0"] {
                  opacity: 0
               }

               [data-hidden=true] {
                  display: none
               }

               [data-action=true] {
                  cursor: pointer
               }

               .ladi-hidden {
                  display: none
               }

               .backdrop-popup {
                  display: none;
                  position: fixed;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  z-index: 90000060
               }

               .backdrop-dropbox {
                  display: none;
                  position: fixed;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  z-index: 90000080
               }

               .lightbox-screen {
                  display: none;
                  position: fixed;
                  width: 100%;
                  height: 100%;
                  top: 0;
                  left: 0;
                  bottom: 0;
                  right: 0;
                  margin: auto;
                  z-index: 9000000080;
                  background: rgba(0, 0, 0, .5)
               }

               .lightbox-screen .lightbox-close {
                  position: absolute;
                  z-index: 9000000090;
                  cursor: pointer
               }

               .lightbox-screen .lightbox-hidden {
                  display: none
               }

               .ladi-animation-hidden {
                  visibility: hidden !important
               }

               .ladi-lazyload {
                  background-image: none !important
               }

               .ladi-list-paragraph ul li.ladi-lazyload:before {
                  background-image: none !important
               }

               .ladi-cart-number {
                  position: absolute;
                  top: -2px;
                  right: -7px;
                  background: #f36e36;
                  text-align: center;
                  width: 18px;
                  height: 18px;
                  line-height: 18px;
                  font-size: 11px;
                  font-weight: 700;
                  color: #fff;
                  border-radius: 100%
               }

               .ladi-form-quantity {
                  display: -webkit-inline-flex;
                  display: inline-flex;
                  border-color: inherit
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item.ladi-form-quantity .ladi-form-control {
                  text-align: center;
                  pointer-events: none;
                  -moz-appearance: textfield;
                  width: calc(100% - 45px);
                  padding: 0;
                  min-width: 24px;
                  border-top: 1px hidden;
                  border-bottom: 1px hidden;
                  border-color: inherit
               }

               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item.ladi-form-quantity input::-webkit-inner-spin-button,
               .ladi-form>.ladi-element .ladi-form-item-container .ladi-form-item.ladi-form-quantity input::-webkit-outer-spin-button {
                  -webkit-appearance: none;
                  margin: 0
               }

               .ladi-form-quantity button {
                  border: 1px hidden;
                  border-color: inherit;
                  cursor: pointer;
                  text-align: center;
                  width: 30px;
                  height: 100%;
                  position: relative;
                  user-select: none;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  -ms-user-select: none
               }

               .ladi-form-quantity button span {
                  font-size: 18px;
                  position: relative;
                  left: .5px
               }

               .ladi-form-quantity button:first-child span {
                  top: -1.2px
               }

               .ladi-form [data-variant=true] select option[disabled] {
                  background: #fff;
                  color: #b8b8b8 !important
               }

               .ladi-story-page-progress-bar {
                  width: 100%;
                  height: 25px;
                  position: fixed;
                  top: 0;
                  left: 0
               }

               .ladi-story-page-progress-bar-item {
                  height: 100%;
                  width: 100%;
                  display: block;
                  float: left;
                  margin: 0 5px;
                  position: relative;
                  cursor: pointer
               }

               .ladi-story-page-progress-bar-item:before {
                  content: '';
                  position: absolute;
                  background: rgba(255, 255, 255, .4);
                  border-radius: 10px;
                  width: 100%;
                  height: 4px;
                  margin: auto;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0
               }

               .ladi-story-page-progress-bar-item.active:before {
                  background: #fff
               }

               .ladi-story-page-progress-bar-item span {
                  background: #fff;
                  border-radius: 10px;
                  height: 4px;
                  display: block;
                  margin: auto 0;
                  top: 0;
                  bottom: 0;
                  position: absolute;
                  transition: width .3s linear;
                  width: 0%
               }

               .ladi-carousel .ladi-carousel-arrow,
               .ladi-collection .ladi-collection-arrow,
               .ladi-collection .ladi-collection-button-next,
               .ladi-gallery .ladi-gallery-control .ladi-gallery-control-arrow,
               .ladi-gallery .ladi-gallery-view .ladi-gallery-view-arrow,
               .ladi-section .ladi-section-arrow-down {
                  width: 33px;
                  height: 33px;
                  background-repeat: no-repeat;
                  background-position: center center;
                  background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")
               }

               #SECTION_POPUP .popup-close,
               .ladi-section .ladi-section-close,
               .lightbox-screen .lightbox-close {
                  width: 18px;
                  height: 18px;
                  margin: 6px;
                  background-repeat: no-repeat;
                  background-position: center center;
                  background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20148.1%20148.1%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M83.4%2C74l54.1-54.1c2.6-2.6%2C2.6-6.8%2C0-9.3c-2.6-2.6-6.8-2.6-9.3%2C0L74%2C64.7L20%2C10.5c-2.6-2.6-6.8-2.6-9.3%2C0c-2.6%2C2.6-2.6%2C6.8%2C0%2C9.3l54%2C54.1l-54.1%2C54.1c-2.6%2C2.6-2.6%2C6.8%2C0%2C9.3c2.6%2C2.6%2C6.8%2C2.6%2C9.3%2C0l54.1-54l54.1%2C54.1c1.3%2C1.3%2C3%2C1.9%2C4.7%2C1.9s3.4-0.6%2C4.7-1.9c1.3-1.3%2C2-3.1%2C2-4.9c0-1.7-0.8-3.4-2-4.6L83.4%2C74z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E")
               }

               #BODY_BACKGROUND {
                  position: fixed;
                  pointer-events: none;
                  top: 0;
                  left: 0;
                  right: 0;
                  margin: 0 auto;
                  height: 100vh !important
               }

               #POPUP_BLOG .ladi-headline img,
               #POPUP_BLOG .ladi-paragraph img {
                  max-width: 100%
               }

               @media (min-width:768px) {
                  .ladi-fullwidth {
                        width: 100vw !important;
                        left: calc(-50vw + 50%) !important;
                        box-sizing: border-box !important;
                        transform: none !important
                  }

                  .ladi-fullwidth .ladi-gallery-view-item {
                        transition-duration: 1.5s
                  }
               }

               @media (max-width:767px) {
                  .ladi-element.ladi-auto-scroll {
                        overflow-x: scroll;
                        overflow-y: hidden;
                        width: 100% !important;
                        left: 0 !important;
                        -webkit-overflow-scrolling: touch
                  }

                  .ladi-section.ladi-auto-scroll {
                        overflow-x: scroll;
                        overflow-y: hidden;
                        -webkit-overflow-scrolling: touch
                  }

                  .ladi-carousel .ladi-carousel-content {
                        transition: left .3s ease-in-out
                  }

                  .ladi-gallery .ladi-gallery-view>.ladi-gallery-view-item {
                        transition: transform .3s ease-in-out
                  }

                  #POPUP_BLOG .ladi-headline img,
                  #POPUP_BLOG .ladi-paragraph img {
                        height: auto !important
                  }
               }

               .ladi-notify-transition {
                  transition: top .5s ease-in-out, bottom .5s ease-in-out, opacity .5s ease-in-out
               }

               .ladi-notify {
                  padding: 5px;
                  box-shadow: 0 0 1px rgba(64, 64, 64, .3), 0 8px 50px rgba(64, 64, 64, .05);
                  border-radius: 40px;
                  line-height: 1.6;
                  width: 100%;
                  height: 100%;
                  font-size: 13px
               }

               .ladi-notify .ladi-notify-image img {
                  float: left;
                  margin-right: 13px;
                  border-radius: 50%;
                  width: 53px;
                  height: 53px;
                  pointer-events: none
               }

               .ladi-notify .ladi-notify-title {
                  font-size: 100%;
                  height: 17px;
                  overflow: hidden;
                  font-weight: 700;
                  overflow-wrap: break-word;
                  text-overflow: ellipsis;
                  white-space: nowrap;
                  line-height: 1
               }

               .ladi-notify .ladi-notify-content {
                  font-size: 92.308%;
                  height: 17px;
                  overflow: hidden;
                  overflow-wrap: break-word;
                  text-overflow: ellipsis;
                  white-space: nowrap;
                  line-height: 1;
                  padding-top: 2px
               }

               .ladi-notify .ladi-notify-time {
                  line-height: 1.6;
                  font-size: 84.615%;
                  display: inline-block;
                  overflow-wrap: break-word;
                  text-overflow: ellipsis;
                  white-space: nowrap;
                  max-width: calc(100% - 155px);
                  overflow: hidden
               }

               .ladi-notify .ladi-notify-copyright {
                  font-size: 76.9231%;
                  margin-left: 2px;
                  position: relative;
                  padding: 0 5px;
                  cursor: pointer;
                  opacity: .6;
                  display: inline-block;
                  top: -4px
               }

               .ladi-notify .ladi-notify-copyright svg {
                  vertical-align: middle
               }

               .ladi-notify .ladi-notify-copyright svg:not(:root) {
                  overflow: hidden
               }

               .ladi-notify .ladi-notify-copyright div {
                  text-decoration: none;
                  color: rgba(64, 64, 64, 1);
                  display: inline
               }

               .ladi-notify .ladi-notify-copyright strong {
                  font-weight: 700
               }

               .builder-container .ladi-notify {
                  transition: unset
               }

               .ladi-spin-lucky {
                  width: 100%;
                  height: 100%;
                  border-radius: 100%;
                  box-shadow: 0 0 7px 0 rgba(64, 64, 64, .6), 0 8px 50px rgba(64, 64, 64, .3);
                  background-repeat: no-repeat;
                  background-size: cover
               }

               .ladi-spin-lucky .ladi-spin-lucky-start {
                  position: absolute;
                  top: 0;
                  left: 0;
                  right: 0;
                  bottom: 0;
                  margin: auto;
                  width: 20%;
                  height: 20%;
                  cursor: pointer;
                  background-size: contain;
                  background-position: center center;
                  background-repeat: no-repeat;
                  transition: transform .3s ease-in-out;
                  -webkit-transition: transform .3s ease-in-out
               }

               .ladi-spin-lucky .ladi-spin-lucky-start:hover {
                  transform: scale(1.1)
               }

               .ladi-spin-lucky .ladi-spin-lucky-screen {
                  width: 100%;
                  height: 100%;
                  border-radius: 100%;
                  transition: transform 7s cubic-bezier(.25, .1, 0, 1);
                  -webkit-transition: transform 7s cubic-bezier(.25, .1, 0, 1);
                  text-decoration-line: inherit;
                  -webkit-text-decoration-line: inherit;
                  text-transform: inherit
               }

               .ladi-spin-lucky .ladi-spin-lucky-screen:before {
                  background-size: cover;
                  background-position: center center;
                  background-repeat: no-repeat;
                  content: '';
                  position: absolute;
                  width: 100%;
                  height: 100%;
                  top: 0;
                  left: 0;
                  pointer-events: none
               }

               .ladi-spin-lucky .ladi-spin-lucky-label {
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  overflow: hidden;
                  width: 42%;
                  padding-left: 12%;
                  transform-origin: 0 0;
                  -webkit-transform-origin: 0 0;
                  text-decoration-line: inherit;
                  -webkit-text-decoration-line: inherit;
                  text-transform: inherit;
                  line-height: 1.6;
                  text-shadow: rgba(0, 0, 0, .5) 1px 0 2px
               }
            </style>
            <style id="style_page" type="text/css">
               @media (min-width: 768px) {
                  .ladi-section .ladi-container {
                        width: 1200px;
                  }
               }

               @media (max-width: 767px) {
                  .ladi-section .ladi-container {
                        width: 420px;
                  }
               }

               body {
                  font-family: "Open Sans", sans-serif
               }
            </style>
            <style id="style_element" type="text/css">
               @media (min-width: 768px) {
                  #SECTION_POPUP {
                        height: 0px;
                  }

                  #SECTION_POPUP .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #SECTION47 {
                        height: 323.5px;
                  }

                  #SECTION47>.ladi-section-background {
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s1440x323/5f27b2f54cf2632d9b32bcf2/qvo16p0n20220607102443.jpg");
                        background-position: center center;
                        background-repeat: no-repeat;
                  }

                  #SECTION47 .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #SECTION19 {
                        height: 77.5px;
                  }

                  #SECTION19>.ladi-section-background {
                        background-color: rgb(255, 255, 255);
                  }

                  #SECTION19 .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #SECTION61 {
                        height: 596.43px;
                  }

                  #SECTION61>.ladi-overlay {
                        background-color: rgba(0, 0, 0, 0.49);
                  }

                  #SECTION61>.ladi-section-background {
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s1440x596/5f27b2f54cf2632d9b32bcf2/otczmfxu20220607101059.jpg");
                        background-position: center center;
                        background-repeat: repeat;
                  }

                  #SECTION61 .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #SECTION78 {
                        height: 1096px;
                  }

                  #SECTION78>.ladi-overlay {
                        background-color: rgba(252, 242, 244, 0.09);
                  }

                  #SECTION78 .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #BOX48 {
                        width: 420.5px;
                        height: 210px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX48>.ladi-box {
                        background-color: rgba(189, 189, 189, 0.02);
                        border-style: solid;
                        border-color: rgb(255, 255, 255);
                        border-width: 8px;
                  }

                  #HEADLINE49 {
                        width: 188px;
                        top: 50px;
                        left: 116.25px;
                  }

                  #HEADLINE49>.ladi-headline {
                        font-family: "Lobster", cursive;
                        color: rgb(255, 255, 255);
                        font-size: 24px;
                        text-align: center;
                        line-height: 1;
                  }

                  #GROUP50 {
                        width: 139px;
                        height: 28px;
                        top: 84px;
                        left: 140.75px;
                  }

                  #LINE51 {
                        width: 44px;
                        top: 9px;
                        left: 0px;
                  }

                  #LINE51>.ladi-line>.ladi-line-container {
                        border-top: 2px solid rgb(255, 255, 255);
                        border-right: 2px solid rgb(255, 255, 255);
                        border-bottom: 2px solid rgb(255, 255, 255);
                        border-left: 0px !important;
                  }

                  #LINE51>.ladi-line {
                        width: 100%;
                        padding: 8px 0px;
                  }

                  #SHAPE52 {
                        width: 28px;
                        height: 28px;
                        top: 0px;
                        left: 57px;
                  }

                  #SHAPE52 svg:last-child {
                        fill: rgba(255, 255, 255, 1);
                  }

                  #LINE53 {
                        width: 41px;
                        top: 9px;
                        left: 98px;
                  }

                  #LINE53>.ladi-line>.ladi-line-container {
                        border-top: 2px solid rgb(255, 255, 255);
                        border-right: 2px solid rgb(255, 255, 255);
                        border-bottom: 2px solid rgb(255, 255, 255);
                        border-left: 0px !important;
                  }

                  #LINE53>.ladi-line {
                        width: 100%;
                        padding: 8px 0px;
                  }

                  #HEADLINE55 {
                        width: 319px;
                        top: 135.5px;
                        left: 50.75px;
                  }

                  #HEADLINE55>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(255, 255, 255);
                        font-size: 34px;
                        font-weight: bold;
                        text-align: center;
                        letter-spacing: 1px;
                        line-height: 1;
                  }

                  #PARAGRAPH77 {
                        width: 1042px;
                        top: 178.22px;
                        left: 79px;
                  }

                  #PARAGRAPH77>.ladi-paragraph {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(255, 255, 255);
                        font-size: 18px;
                        text-align: justify;
                        letter-spacing: 0px;
                        line-height: 2;
                  }

                  #HEADLINE76 {
                        width: 454px;
                        top: 67.22px;
                        left: 373px;
                  }

                  #HEADLINE76>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(255, 255, 255);
                        font-size: 26px;
                        font-weight: bold;
                        text-transform: uppercase;
                        text-align: center;
                        letter-spacing: 4px;
                        line-height: 1.2;
                  }

                  #GROUP79 {
                        width: 301px;
                        height: 31px;
                        top: 70.867px;
                        left: 599px;
                  }

                  #HEADLINE80 {
                        width: 254px;
                        top: 0px;
                        left: 20px;
                  }

                  #HEADLINE80>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(33, 33, 33);
                        font-size: 26px;
                        font-weight: bold;
                        text-align: left;
                        line-height: 1;
                  }

                  #LINE81 {
                        width: 15px;
                        top: 13px;
                        left: 0px;
                  }

                  #LINE81>.ladi-line>.ladi-line-container {
                        border-top: 2px solid rgb(33, 33, 33);
                        border-right: 2px solid rgb(33, 33, 33);
                        border-bottom: 2px solid rgb(33, 33, 33);
                        border-left: 0px !important;
                  }

                  #LINE81>.ladi-line {
                        width: 100%;
                        padding: 8px 0px;
                  }

                  #GROUP86 {
                        width: 601px;
                        height: 263.9px;
                        top: 107.867px;
                        left: 599px;
                  }

                  #PARAGRAPH87 {
                        width: 594px;
                        top: 58.9004px;
                        left: 0px;
                  }

                  #PARAGRAPH87>.ladi-paragraph {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(66, 66, 66);
                        font-size: 16px;
                        text-align: justify;
                        line-height: 1.6;
                  }

                  #HEADLINE88 {
                        width: 601px;
                        top: 0px;
                        left: 0px;
                  }

                  #HEADLINE88>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(173, 5, 5);
                        font-size: 20px;
                        text-align: left;
                        line-height: 1.2;
                  }

                  #GROUP239 {
                        width: 420.5px;
                        height: 210px;
                        top: 56.75px;
                        left: 389.75px;
                  }

                  #BOX247 {
                        width: 541.738px;
                        height: 515.033px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX247>.ladi-box {
                        background-color: rgba(255, 255, 255, 0.7);
                        border-style: dashed;
                        border-color: rgb(217, 235, 255);
                        border-width: 2px;
                        border-radius: 1000px;
                  }

                  #BOX248 {
                        width: 500.978px;
                        height: 476.281px;
                        top: 19.4215px;
                        left: 20.3805px;
                  }

                  #BOX248>.ladi-box {
                        box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        -webkit-box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("{{ url('frontend/images/trang-noi-dung-262883067.jpg') }}");
                        background-position: center top;
                        background-repeat: repeat;
                        border-radius: 1000px;
                  }

                  #SHAPE249 {
                        width: 22.4065px;
                        height: 21.302px;
                        top: 488.824px;
                        left: 413.009px;
                  }

                  #SHAPE249 svg:last-child {
                        fill: rgba(217, 235, 255, 1.0);
                  }

                  #SHAPE250 {
                        width: 25.8933px;
                        height: 28.4259px;
                        top: 35.2459px;
                        left: 60.971px;
                  }

                  #SHAPE250 svg:last-child {
                        fill: rgba(217, 235, 255, 1.0);
                  }

                  #GROUP246 {
                        width: 541.738px;
                        height: 515.033px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX251 {
                        width: 225.335px;
                        height: 214.228px;
                        top: 314.173px;
                        left: 0px;
                  }

                  #BOX251>.ladi-box {
                        box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        -webkit-box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("{{ url('frontend/images/thu-vien--1964903572.jpg') }}");
                        background-position: center top;
                        background-repeat: repeat;
                        border-radius: 1000px;
                  }

                  #GROUP245 {
                        width: 541.738px;
                        height: 528.401px;
                        top: 0px;
                        left: 0px;
                  }

                  #GROUP254 {
                        width: 1200px;
                        height: 528.401px;
                        top: 0px;
                        left: 0px;
                  }

                  #HEADLINE257 {
                        width: 386px;
                        top: 0px;
                        left: 25px;
                  }

                  #HEADLINE257>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(33, 33, 33);
                        font-size: 26px;
                        font-weight: bold;
                        text-align: left;
                        line-height: 1;
                  }

                  #LINE258 {
                        width: 15px;
                        top: 8px;
                        left: 0px;
                  }

                  #LINE258>.ladi-line>.ladi-line-container {
                        border-top: 2px solid rgb(33, 33, 33);
                        border-right: 2px solid rgb(33, 33, 33);
                        border-bottom: 2px solid rgb(33, 33, 33);
                        border-left: 0px !important;
                  }

                  #LINE258>.ladi-line {
                        width: 100%;
                        padding: 8px 0px;
                  }

                  #GROUP256 {
                        width: 426px;
                        height: 26px;
                        top: 133.83px;
                        left: 0px;
                  }

                  #PARAGRAPH260 {
                        width: 590px;
                        top: 63.8135px;
                        left: 0px;
                  }

                  #PARAGRAPH260>.ladi-paragraph {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(66, 66, 66);
                        font-size: 16px;
                        text-align: justify;
                        line-height: 1.6;
                  }

                  #HEADLINE261 {
                        width: 480px;
                        top: 0px;
                        left: 0px;
                  }

                  #HEADLINE261>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(173, 5, 5);
                        font-size: 20px;
                        text-align: left;
                        line-height: 1.2;
                  }

                  #GROUP259 {
                        width: 590px;
                        height: 217.814px;
                        top: 166.13px;
                        left: 0px;
                  }

                  #BOX264 {
                        width: 541.738px;
                        height: 515.033px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX264>.ladi-box {
                        background-color: rgba(255, 255, 255, 0.7);
                        border-style: dashed;
                        border-color: rgb(217, 235, 255);
                        border-width: 2px;
                        border-radius: 1000px;
                  }

                  #BOX265 {
                        width: 500.978px;
                        height: 476.281px;
                        top: 19.4215px;
                        left: 20.3805px;
                  }

                  #BOX265>.ladi-box {
                        box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        -webkit-box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("{{ url('frontend/images/thu-vien--201903631.jpg') }}");
                        background-position: center top;
                        background-repeat: repeat;
                        border-radius: 1000px;
                  }

                  #SHAPE266 {
                        width: 22.4065px;
                        height: 21.302px;
                        top: 488.824px;
                        left: 413.009px;
                  }

                  #SHAPE266 svg:last-child {
                        fill: rgba(217, 235, 255, 1.0);
                  }

                  #SHAPE267 {
                        width: 25.8933px;
                        height: 28.4259px;
                        top: 35.2459px;
                        left: 60.971px;
                  }

                  #SHAPE267 svg:last-child {
                        fill: rgba(217, 235, 255, 1.0);
                  }

                  #GROUP263 {
                        width: 541.738px;
                        height: 515.033px;
                        top: 0px;
                        left: 0px;
                  }

                  #GROUP255 {
                        width: 1200px;
                        height: 515.033px;
                        top: 528.401px;
                        left: 0px;
                  }

                  #GROUP262 {
                        width: 541.738px;
                        height: 515.033px;
                        top: 0px;
                        left: 658.262px;
                  }

                  #BOX268 {
                        width: 225.335px;
                        height: 214.228px;
                        top: 300.805px;
                        left: 0px;
                  }

                  #BOX268>.ladi-box {
                        box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        -webkit-box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s550x550/5f27b2f54cf2632d9b32bcf2/biet-thu-20211115081634.jpg");
                        background-position: center top;
                        background-repeat: repeat;
                        border-radius: 1000px;
                  }

                  #SECTION333 {
                        height: 652px;
                  }

                  #SECTION333 .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #BOX336 {
                        width: 686.055px;
                        height: 538.189px;
                        top: 56.0825px;
                        left: 513.945px;
                  }

                  #BOX336>.ladi-box>.ladi-overlay {
                        background: rgba(234, 242, 254, 1.0);
                        background: -webkit-linear-gradient(180deg, rgba(234, 242, 254, 1.0), rgba(232, 104, 48, 1));
                        background: linear-gradient(180deg, rgba(234, 242, 254, 1.0), rgba(232, 104, 48, 1));
                        opacity: 0;
                  }

                  #BOX336>.ladi-box {
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s1000x850/5f27b2f54cf2632d9b32bcf2/noi-that-go-oc-cho-1-20211115042206.jpg");
                        background-position: center top;
                        background-repeat: repeat;
                        border-top-left-radius: 500px;
                        border-bottom-left-radius: 500px;
                  }

                  #GROUP337 {
                        width: 423.5px;
                        height: 72px;
                        top: 50.98px;
                        left: 0px;
                  }

                  #BOX338 {
                        width: 423.5px;
                        height: 37px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX338>.ladi-box {
                        background: rgba(255, 255, 255, 1.0);
                        background: -webkit-linear-gradient(90deg, rgba(255, 255, 255, 1.0), rgba(234, 242, 254, 1.0));
                        background: linear-gradient(90deg, rgba(255, 255, 255, 1.0), rgba(234, 242, 254, 1.0));
                  }

                  #HEADLINE339 {
                        width: 387px;
                        top: 0px;
                        left: 10.2542px;
                  }

                  #HEADLINE339>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(5, 34, 74);
                        font-size: 30px;
                        font-weight: bold;
                        letter-spacing: 0px;
                        line-height: 1.2;
                  }

                  #IMAGE341 {
                        width: 239.583px;
                        height: 239.584px;
                        top: 205.385px;
                        left: 430.168px;
                  }

                  #IMAGE341>.ladi-image>.ladi-overlay {
                        background: rgba(121, 70, 40, 1);
                        background: -webkit-linear-gradient(180deg, rgba(121, 70, 40, 1), rgba(232, 104, 48, 1));
                        background: linear-gradient(180deg, rgba(121, 70, 40, 1), rgba(232, 104, 48, 1));
                        opacity: 0;
                        mix-blend-mode: color-dodge;
                        will-change: transform, opacity;
                  }

                  #IMAGE341>.ladi-image>.ladi-image-background {
                        width: 359.376px;
                        height: 239.584px;
                        top: 0px;
                        left: -58.9312px;
                        background-image: url("https://w.ladicdn.com/s700x550/5f27b2f54cf2632d9b32bcf2/noi-that-go-oc-cho-1-20211115041923.jpg");
                  }

                  #IMAGE341>.ladi-image {
                        box-shadow: 2px 7px 15px 0px rgba(0, 0, 0, 0.2);
                        -webkit-box-shadow: 2px 7px 15px 0px rgba(0, 0, 0, 0.2);
                        border-radius: 500px;
                  }

                  #PARAGRAPH354 {
                        width: 414px;
                        top: 351.254px;
                        left: 10px;
                  }

                  #PARAGRAPH354>.ladi-paragraph {
                        color: rgb(0, 0, 0);
                        font-size: 16px;
                        line-height: 1.6;
                  }

                  #BOX362 {
                        width: 1339px;
                        height: 680.999px;
                        top: -33.499px;
                        left: 614px;
                  }

                  #BOX362>.ladi-box {
                        background-color: rgb(232, 110, 48);
                  }

                  #HEADLINE364 {
                        width: 471px;
                        top: 133.906px;
                        left: 27px;
                  }

                  #HEADLINE364>.ladi-headline {
                        color: rgb(255, 255, 255);
                        font-size: 16px;
                        text-align: justify;
                        letter-spacing: 1px;
                        line-height: 1.6;
                  }

                  #SHAPE367 {
                        width: 60px;
                        height: 60px;
                        top: 171.845px;
                        left: 328.834px;
                  }

                  #SHAPE367 svg:last-child {
                        fill: rgba(0, 0, 0, 0.5);
                  }

                  #VIDEO367 {
                        width: 717.669px;
                        height: 403.689px;
                        top: 122.906px;
                        left: 536px;
                  }

                  #VIDEO367>.ladi-video>.ladi-video-background {
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s717x403/5f27b2f54cf2632d9b32bcf2/1603419843-z2115165462623_6a5507b93bca03c30fe6b411c6eddb76-20211112092137.jpg");
                        background-position: center center;
                        background-repeat: no-repeat;
                  }

                  #VIDEO367>.ladi-video {
                        box-shadow: 15px 15px 10px 10px rgba(34, 42, 48, 0.4);
                        -webkit-box-shadow: 15px 15px 10px 10px rgba(34, 42, 48, 0.4);
                  }

                  #BOX370 {
                        width: 42.8753px;
                        height: 40.34px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX370>.ladi-box {
                        background-color: rgba(245, 65, 38, 0.5);
                        border-radius: 500px;
                  }

                  #HEADLINE371 {
                        width: 383px;
                        top: 12.84px;
                        left: 16.1234px;
                  }

                  #HEADLINE371>.ladi-headline {
                        color: rgb(255, 255, 255);
                        font-size: 30px;
                        font-weight: bold;
                        line-height: 1.2;
                  }

                  #GROUP369 {
                        width: 398.749px;
                        height: 48.84px;
                        top: 67.066px;
                        left: 10px;
                  }

                  #LINE372 {
                        width: 111px;
                        top: 115.906px;
                        left: 16px;
                  }

                  #LINE372>.ladi-line>.ladi-line-container {
                        border-top: 2px solid rgb(238, 238, 238);
                        border-right: 2px solid rgb(238, 238, 238);
                        border-bottom: 2px solid rgb(238, 238, 238);
                        border-left: 0px !important;
                  }

                  #LINE372>.ladi-line {
                        width: 100%;
                        padding: 8px 0px;
                  }

                  #SECTION361 {
                        height: 649.5px;
                  }

                  #SECTION361>.ladi-overlay {
                        background-color: rgb(238, 143, 102);
                  }

                  #SECTION361>.ladi-section-background {
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s1440x649/57b167c9ca57d39c18a1c57c/fsbjxhs620200505030357.jpg");
                        background-position: center top;
                        background-repeat: repeat;
                  }

                  #SECTION361 .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #BOX391 {
                        width: 38.943px;
                        height: 40.34px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX391>.ladi-box {
                        background-color: rgba(245, 65, 38, 0.5);
                        border-radius: 500px;
                  }

                  #HEADLINE392 {
                        width: 144px;
                        top: 12.84px;
                        left: 14.6446px;
                  }

                  #HEADLINE392>.ladi-headline {
                        color: rgb(0, 0, 0);
                        font-size: 30px;
                        font-weight: bold;
                        line-height: 1.2;
                  }

                  #GROUP390 {
                        width: 159.062px;
                        height: 48.84px;
                        top: 14.33px;
                        left: 512.469px;
                  }

                  #LINE393 {
                        width: 159px;
                        top: 59.5px;
                        left: 512.469px;
                  }

                  #LINE393>.ladi-line>.ladi-line-container {
                        border-top: 2px solid rgb(232, 110, 48);
                        border-right: 2px solid rgb(232, 110, 48);
                        border-bottom: 2px solid rgb(232, 110, 48);
                        border-left: 0px !important;
                  }

                  #LINE393>.ladi-line {
                        width: 100%;
                        padding: 8px 0px;
                  }

                  #PARAGRAPH394 {
                        width: 403px;
                        top: 126.754px;
                        left: 15.5px;
                  }

                  #PARAGRAPH394>.ladi-paragraph {
                        color: rgb(0, 0, 0);
                        font-size: 16px;
                        text-align: justify;
                        letter-spacing: 0px;
                        line-height: 1.6;
                  }

                  #BUTTON395 {
                        width: 228.998px;
                        height: 39.9995px;
                        top: 587.754px;
                        left: 10px;
                  }

                  #BUTTON395>.ladi-button>.ladi-button-background {
                        background-color: rgb(232, 104, 48);
                  }

                  #BUTTON_TEXT395 {
                        width: 229px;
                        top: 9px;
                        left: 0px;
                  }

                  #BUTTON_TEXT395>.ladi-headline {
                        color: rgb(255, 255, 255);
                        font-size: 16px;
                        font-weight: bold;
                        text-align: center;
                        line-height: 1.6;
                  }
               }

               @media (max-width: 767px) {
                  #SECTION_POPUP {
                        height: 0px;
                  }

                  #SECTION_POPUP .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #SECTION47 {
                        height: 235px;
                  }

                  #SECTION47>.ladi-section-background {
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s768x235/5f27b2f54cf2632d9b32bcf2/qvo16p0n20220607102443.jpg");
                        background-position: center center;
                        background-repeat: no-repeat;
                  }

                  #SECTION47 .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #SECTION19 {
                        height: 73.715px;
                  }

                  #SECTION19>.ladi-section-background {
                        background-color: rgb(255, 255, 255);
                  }

                  #SECTION19 .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #SECTION61 {
                        height: 558px;
                  }

                  #SECTION61>.ladi-overlay {
                        background-color: rgba(0, 0, 0, 0.49);
                  }

                  #SECTION61>.ladi-section-background {
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s768x558/5f27b2f54cf2632d9b32bcf2/otczmfxu20220607101059.jpg");
                        background-position: center center;
                        background-repeat: repeat;
                  }

                  #SECTION61 .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #SECTION78 {
                        height: 1307.43px;
                  }

                  #SECTION78>.ladi-overlay {
                        background-color: rgba(252, 242, 244, 0.09);
                  }

                  #SECTION78 .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #BOX48 {
                        width: 287px;
                        height: 126px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX48>.ladi-box {
                        background-color: rgba(189, 189, 189, 0.02);
                        border-style: solid;
                        border-color: rgb(255, 255, 255);
                        border-width: 8px;
                  }

                  #HEADLINE49 {
                        width: 188px;
                        top: 19.196px;
                        left: 49.5px;
                  }

                  #HEADLINE49>.ladi-headline {
                        font-family: "Lobster", cursive;
                        color: rgb(255, 255, 255);
                        font-size: 24px;
                        text-align: center;
                        line-height: 1;
                  }

                  #GROUP50 {
                        width: 139px;
                        height: 8.86432px;
                        top: 43.196px;
                        left: 74px;
                  }

                  #LINE51 {
                        width: 44px;
                        top: 2.84925px;
                        left: 0px;
                  }

                  #LINE51>.ladi-line>.ladi-line-container {
                        border-top: 2px solid rgb(255, 255, 255);
                        border-right: 2px solid rgb(255, 255, 255);
                        border-bottom: 2px solid rgb(255, 255, 255);
                        border-left: 0px !important;
                  }

                  #LINE51>.ladi-line {
                        width: 100%;
                        padding: 8px 0px;
                  }

                  #SHAPE52 {
                        width: 28px;
                        height: 8.86432px;
                        top: 0px;
                        left: 57px;
                  }

                  #SHAPE52 svg:last-child {
                        fill: rgba(255, 255, 255, 1);
                  }

                  #LINE53 {
                        width: 41px;
                        top: 2.84925px;
                        left: 98px;
                  }

                  #LINE53>.ladi-line>.ladi-line-container {
                        border-top: 2px solid rgb(255, 255, 255);
                        border-right: 2px solid rgb(255, 255, 255);
                        border-bottom: 2px solid rgb(255, 255, 255);
                        border-left: 0px !important;
                  }

                  #LINE53>.ladi-line {
                        width: 100%;
                        padding: 8px 0px;
                  }

                  #HEADLINE55 {
                        width: 287px;
                        top: 73.2261px;
                        left: 0px;
                  }

                  #HEADLINE55>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(255, 255, 255);
                        font-size: 35px;
                        font-weight: bold;
                        text-align: center;
                        letter-spacing: 1px;
                        line-height: 1;
                  }

                  #PARAGRAPH77 {
                        width: 384px;
                        top: 119.5px;
                        left: 18.0852px;
                  }

                  #PARAGRAPH77>.ladi-paragraph {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(255, 255, 255);
                        font-size: 16px;
                        text-align: justify;
                        letter-spacing: 0px;
                        line-height: 1.6;
                  }

                  #HEADLINE76 {
                        width: 300px;
                        top: 41.5px;
                        left: 54.0852px;
                  }

                  #HEADLINE76>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(255, 255, 255);
                        font-size: 25px;
                        font-weight: bold;
                        text-transform: uppercase;
                        text-align: center;
                        letter-spacing: 4px;
                        line-height: 1.2;
                  }

                  #GROUP79 {
                        width: 258.965px;
                        height: 34.8675px;
                        top: 323.313px;
                        left: 0.832px;
                  }

                  #HEADLINE80 {
                        width: 225px;
                        top: 0px;
                        left: 34.1858px;
                  }

                  #HEADLINE80>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(33, 33, 33);
                        font-size: 30px;
                        font-weight: bold;
                        text-align: left;
                        line-height: 1;
                  }

                  #LINE81 {
                        width: 27px;
                        top: 16.8675px;
                        left: 0px;
                  }

                  #LINE81>.ladi-line>.ladi-line-container {
                        border-top: 2px solid rgb(33, 33, 33);
                        border-right: 2px solid rgb(33, 33, 33);
                        border-bottom: 2px solid rgb(33, 33, 33);
                        border-left: 0px !important;
                  }

                  #LINE81>.ladi-line {
                        width: 100%;
                        padding: 8px 0px;
                  }

                  #GROUP86 {
                        width: 409px;
                        height: 251.42px;
                        top: 368.181px;
                        left: 0px;
                  }

                  #PARAGRAPH87 {
                        width: 401px;
                        top: 27.42px;
                        left: 4.832px;
                  }

                  #PARAGRAPH87>.ladi-paragraph {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(66, 66, 66);
                        font-size: 16px;
                        text-align: justify;
                        line-height: 1.4;
                  }

                  #HEADLINE88 {
                        width: 409px;
                        top: 0px;
                        left: 0px;
                  }

                  #HEADLINE88>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(173, 5, 5);
                        font-size: 20px;
                        text-align: left;
                        line-height: 1.2;
                  }

                  #GROUP239 {
                        width: 287px;
                        height: 126px;
                        top: 48px;
                        left: 66.5px;
                  }

                  #BOX247 {
                        width: 322.336px;
                        height: 306.447px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX247>.ladi-box {
                        background-color: rgba(255, 255, 255, 0.7);
                        border-style: dashed;
                        border-color: rgb(217, 235, 255);
                        border-width: 2px;
                        border-radius: 1000px;
                  }

                  #BOX248 {
                        width: 298.084px;
                        height: 283.389px;
                        top: 11.5559px;
                        left: 12.1265px;
                  }

                  #BOX248>.ladi-box {
                        box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        -webkit-box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s600x600/5f27b2f54cf2632d9b32bcf2/showroom-noi-that-go-oc-cho-DHOMELUXYRY-20211112084822.jpg");
                        background-position: center top;
                        background-repeat: repeat;
                        border-radius: 1000px;
                  }

                  #SHAPE249 {
                        width: 13.3319px;
                        height: 12.6748px;
                        top: 290.853px;
                        left: 245.742px;
                  }

                  #SHAPE249 svg:last-child {
                        fill: rgba(217, 235, 255, 1.0);
                  }

                  #SHAPE250 {
                        width: 15.4066px;
                        height: 16.9135px;
                        top: 20.9715px;
                        left: 36.278px;
                  }

                  #SHAPE250 svg:last-child {
                        fill: rgba(217, 235, 255, 1.0);
                  }

                  #GROUP246 {
                        width: 322.336px;
                        height: 306.447px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX251 {
                        width: 134.075px;
                        height: 127.467px;
                        top: 186.934px;
                        left: 0px;
                  }

                  #BOX251>.ladi-box {
                        box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        -webkit-box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s450x450/5f27b2f54cf2632d9b32bcf2/nadu-desing-1-1-20211112084959.png");
                        background-position: center top;
                        background-repeat: repeat;
                        border-radius: 1000px;
                  }

                  #GROUP245 {
                        width: 322.336px;
                        height: 314.401px;
                        top: 0px;
                        left: 47.332px;
                  }

                  #GROUP254 {
                        width: 409px;
                        height: 619.601px;
                        top: 31px;
                        left: 4.668px;
                  }

                  #HEADLINE257 {
                        width: 365px;
                        top: 0px;
                        left: 44.3904px;
                  }

                  #HEADLINE257>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(33, 33, 33);
                        font-size: 25px;
                        font-weight: bold;
                        text-align: left;
                        line-height: 1;
                  }

                  #LINE258 {
                        width: 29px;
                        top: 7.66688px;
                        left: 0px;
                  }

                  #LINE258>.ladi-line>.ladi-line-container {
                        border-top: 2px solid rgb(33, 33, 33);
                        border-right: 2px solid rgb(33, 33, 33);
                        border-bottom: 2px solid rgb(33, 33, 33);
                        border-left: 0px !important;
                  }

                  #LINE258>.ladi-line {
                        width: 100%;
                        padding: 8px 0px;
                  }

                  #GROUP256 {
                        width: 408.875px;
                        height: 25.8896px;
                        top: 316.906px;
                        left: 0px;
                  }

                  #PARAGRAPH260 {
                        width: 402px;
                        top: 36.7624px;
                        left: 0px;
                  }

                  #PARAGRAPH260>.ladi-paragraph {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(66, 66, 66);
                        font-size: 16px;
                        text-align: justify;
                        line-height: 1.4;
                  }

                  #HEADLINE261 {
                        width: 402px;
                        top: 0px;
                        left: 0px;
                  }

                  #HEADLINE261>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(173, 5, 5);
                        font-size: 18px;
                        text-align: left;
                        line-height: 1.2;
                  }

                  #GROUP259 {
                        width: 402.295px;
                        height: 215.762px;
                        top: 356.647px;
                        left: 4.52889px;
                  }

                  #BOX264 {
                        width: 319.496px;
                        height: 303.746px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX264>.ladi-box {
                        background-color: rgba(255, 255, 255, 0.7);
                        border-style: dashed;
                        border-color: rgb(217, 235, 255);
                        border-width: 2px;
                        border-radius: 1000px;
                  }

                  #BOX265 {
                        width: 295.457px;
                        height: 280.891px;
                        top: 11.454px;
                        left: 12.0196px;
                  }

                  #BOX265>.ladi-box {
                        box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        -webkit-box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s600x600/5f27b2f54cf2632d9b32bcf2/thiet-ke-noi-that-biet-thu-15-20211115090204.jpg");
                        background-position: center top;
                        background-repeat: repeat;
                        border-radius: 1000px;
                  }

                  #SHAPE266 {
                        width: 13.2144px;
                        height: 12.5631px;
                        top: 288.289px;
                        left: 243.577px;
                  }

                  #SHAPE266 svg:last-child {
                        fill: rgba(217, 235, 255, 1.0);
                  }

                  #SHAPE267 {
                        width: 15.2709px;
                        height: 16.7644px;
                        top: 20.7867px;
                        left: 35.9583px;
                  }

                  #SHAPE267 svg:last-child {
                        fill: rgba(217, 235, 255, 1.0);
                  }

                  #GROUP263 {
                        width: 319.496px;
                        height: 303.746px;
                        top: 0px;
                        left: 0px;
                  }

                  #GROUP255 {
                        width: 408.875px;
                        height: 572.409px;
                        top: 691.376px;
                        left: 5.79511px;
                  }

                  #GROUP262 {
                        width: 319.496px;
                        height: 303.746px;
                        top: 0px;
                        left: 45.9284px;
                  }

                  #BOX268 {
                        width: 132.893px;
                        height: 126.343px;
                        top: 177.403px;
                        left: 0px;
                  }

                  #BOX268>.ladi-box {
                        box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        -webkit-box-shadow: 0px 0px 30px -15px rgba(0, 0, 0, 0.2);
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s450x450/5f27b2f54cf2632d9b32bcf2/biet-thu-20211115081634.jpg");
                        background-position: center top;
                        background-repeat: repeat;
                        border-radius: 1000px;
                  }

                  #SECTION333 {
                        height: 886.96px;
                  }

                  #SECTION333 .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #BOX336 {
                        width: 361.646px;
                        height: 250.211px;
                        top: 0px;
                        left: 58.354px;
                  }

                  #BOX336>.ladi-box>.ladi-overlay {
                        background: rgba(234, 242, 254, 1.0);
                        background: -webkit-linear-gradient(180deg, rgba(234, 242, 254, 1.0), rgba(232, 104, 48, 1));
                        background: linear-gradient(180deg, rgba(234, 242, 254, 1.0), rgba(232, 104, 48, 1));
                        opacity: 0;
                  }

                  #BOX336>.ladi-box {
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s700x600/5f27b2f54cf2632d9b32bcf2/noi-that-go-oc-cho-1-20211115042206.jpg");
                        background-position: center top;
                        background-repeat: repeat;
                        border-top-left-radius: 500px;
                        border-bottom-left-radius: 500px;
                  }

                  #GROUP337 {
                        width: 413px;
                        height: 72px;
                        top: 257.206px;
                        left: 2.75px;
                  }

                  #BOX338 {
                        width: 413px;
                        height: 37px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX338>.ladi-box {
                        background: rgba(255, 255, 255, 1.0);
                        background: -webkit-linear-gradient(90deg, rgba(255, 255, 255, 1.0), rgba(234, 242, 254, 1.0));
                        background: linear-gradient(90deg, rgba(255, 255, 255, 1.0), rgba(234, 242, 254, 1.0));
                  }

                  #HEADLINE339 {
                        width: 377px;
                        top: 0px;
                        left: 11px;
                  }

                  #HEADLINE339>.ladi-headline {
                        font-family: "Open Sans", sans-serif;
                        color: rgb(5, 34, 74);
                        font-size: 30px;
                        font-weight: bold;
                        letter-spacing: 0px;
                        line-height: 1.2;
                  }

                  #IMAGE341 {
                        width: 154.62px;
                        height: 154.621px;
                        top: 92.587px;
                        left: 0.75px;
                  }

                  #IMAGE341>.ladi-image>.ladi-overlay {
                        background: rgba(121, 70, 40, 1);
                        background: -webkit-linear-gradient(180deg, rgba(121, 70, 40, 1), rgba(232, 104, 48, 1));
                        background: linear-gradient(180deg, rgba(121, 70, 40, 1), rgba(232, 104, 48, 1));
                        opacity: 0;
                        mix-blend-mode: color-dodge;
                        will-change: transform, opacity;
                  }

                  #IMAGE341>.ladi-image>.ladi-image-background {
                        width: 231.931px;
                        height: 154.621px;
                        top: 0px;
                        left: -38.0324px;
                        background-image: url("https://w.ladicdn.com/s550x500/5f27b2f54cf2632d9b32bcf2/noi-that-go-oc-cho-1-20211115041923.jpg");
                  }

                  #IMAGE341>.ladi-image {
                        box-shadow: 2px 7px 15px 0px rgba(0, 0, 0, 0.2);
                        -webkit-box-shadow: 2px 7px 15px 0px rgba(0, 0, 0, 0.2);
                        border-radius: 500px;
                  }

                  #PARAGRAPH354 {
                        width: 414px;
                        top: 667.96px;
                        left: 10px;
                  }

                  #PARAGRAPH354>.ladi-paragraph {
                        color: rgb(0, 0, 0);
                        font-size: 16px;
                        line-height: 1.6;
                  }

                  #BOX362 {
                        width: 420.617px;
                        height: 487.438px;
                        top: 341.517px;
                        left: 0px;
                  }

                  #BOX362>.ladi-box {
                        background-color: rgb(232, 110, 48);
                  }

                  #HEADLINE364 {
                        width: 401px;
                        top: 356.425px;
                        left: 10.118px;
                  }

                  #HEADLINE364>.ladi-headline {
                        color: rgb(255, 255, 255);
                        font-size: 16.08px;
                        text-align: justify;
                        letter-spacing: 1px;
                        line-height: 1.6;
                  }

                  #SHAPE367 {
                        width: 60px;
                        height: 60px;
                        top: 82.5001px;
                        left: 170px;
                  }

                  #SHAPE367 svg:last-child {
                        fill: rgba(0, 0, 0, 0.5);
                  }

                  #VIDEO367 {
                        width: 400px;
                        height: 225px;
                        top: 81.395px;
                        left: 10.309px;
                  }

                  #VIDEO367>.ladi-video>.ladi-video-background {
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s400x225/5f27b2f54cf2632d9b32bcf2/1603419843-z2115165462623_6a5507b93bca03c30fe6b411c6eddb76-20211112092137.jpg");
                        background-position: center center;
                        background-repeat: no-repeat;
                  }

                  #BOX370 {
                        width: 40.34px;
                        height: 40.34px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX370>.ladi-box {
                        background-color: rgba(245, 65, 38, 0.5);
                        border-radius: 500px;
                  }

                  #HEADLINE371 {
                        width: 360px;
                        top: 12.84px;
                        left: 15.17px;
                  }

                  #HEADLINE371>.ladi-headline {
                        color: rgb(255, 255, 255);
                        font-size: 27px;
                        font-weight: bold;
                        line-height: 1.2;
                  }

                  #GROUP369 {
                        width: 375.17px;
                        height: 44.84px;
                        top: 21.465px;
                        left: 9.8095px;
                  }

                  #LINE372 {
                        width: 111px;
                        top: 63.395px;
                        left: 26.001px;
                  }

                  #LINE372>.ladi-line>.ladi-line-container {
                        border-top: 2px solid rgb(238, 238, 238);
                        border-right: 2px solid rgb(238, 238, 238);
                        border-bottom: 2px solid rgb(238, 238, 238);
                        border-left: 0px !important;
                  }

                  #LINE372>.ladi-line {
                        width: 100%;
                        padding: 8px 0px;
                  }

                  #SECTION361 {
                        height: 828.955px;
                  }

                  #SECTION361>.ladi-overlay {
                        background-color: rgb(238, 143, 102);
                  }

                  #SECTION361>.ladi-section-background {
                        background-size: cover;
                        background-attachment: scroll;
                        background-origin: content-box;
                        background-image: url("https://w.ladicdn.com/s768x828/57b167c9ca57d39c18a1c57c/fsbjxhs620200505030357.jpg");
                        background-position: center top;
                        background-repeat: repeat;
                  }

                  #SECTION361 .ladi-section-arrow-down {
                        background-image: url("data:image/svg+xml;utf8, %3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2023%2039%22%20style%3D%22filter%3A%20drop-shadow(0%201px%20.15px%20%23B2B2B2)%3B%20transform%3A%20rotate(90deg)%3B%20-webkit-transform%3A%20rotate(90deg)%3B%22%20fill%3D%22%23fff%22%3E%3Cpath%20d%3D%22M2%2C3l1.5-1.5l18.1%2C18l-18.1%2C18L2%2C36l16.6-16.5L2%2C3z%22%3E%3C%2Fpath%3E%3C%2Fsvg%3E");
                  }

                  #BOX391 {
                        width: 39.2648px;
                        height: 40.34px;
                        top: 0px;
                        left: 0px;
                  }

                  #BOX391>.ladi-box {
                        background-color: rgba(245, 65, 38, 0.5);
                        border-radius: 500px;
                  }

                  #HEADLINE392 {
                        width: 143px;
                        top: 12.84px;
                        left: 14.766px;
                  }

                  #HEADLINE392>.ladi-headline {
                        color: rgb(0, 0, 0);
                        font-size: 27px;
                        font-weight: bold;
                        line-height: 1.2;
                  }

                  #GROUP390 {
                        width: 157.766px;
                        height: 44.84px;
                        top: 10px;
                        left: 131.117px;
                  }

                  #LINE393 {
                        width: 111px;
                        top: 49.84px;
                        left: 154.5px;
                  }

                  #LINE393>.ladi-line>.ladi-line-container {
                        border-top: 2px solid rgb(232, 110, 48);
                        border-right: 2px solid rgb(232, 110, 48);
                        border-bottom: 2px solid rgb(232, 110, 48);
                        border-left: 0px !important;
                  }

                  #LINE393>.ladi-line {
                        width: 100%;
                        padding: 8px 0px;
                  }

                  #PARAGRAPH394 {
                        width: 402px;
                        top: 343.96px;
                        left: 8.059px;
                  }

                  #PARAGRAPH394>.ladi-paragraph {
                        color: rgb(0, 0, 0);
                        font-size: 16px;
                        text-align: justify;
                        letter-spacing: 0px;
                        line-height: 1.6;
                  }

                  #BUTTON395 {
                        width: 228.998px;
                        height: 39.9995px;
                        top: 780.96px;
                        left: 8.059px;
                  }

                  #BUTTON395>.ladi-button>.ladi-button-background {
                        background-color: rgb(232, 104, 48);
                  }

                  #BUTTON_TEXT395 {
                        width: 229px;
                        top: 9px;
                        left: 0px;
                  }

                  #BUTTON_TEXT395>.ladi-headline {
                        color: rgb(255, 255, 255);
                        font-size: 16px;
                        font-weight: bold;
                        text-align: center;
                        line-height: 1.6;
                  }
               }
            </style>
            <div class="ladi-wraper">
               <div id="SECTION47" class="ladi-section">
                  <div class="ladi-section-background"></div>
                  <div class="ladi-container">
                        <div id="GROUP239" class="ladi-element">
                           <div class="ladi-group">
                              <div id="BOX48" class="ladi-element">
                                    <div class="ladi-box"></div>
                              </div>
                              <div id="HEADLINE49" class="ladi-element">
                                    <h1 class="ladi-headline">Về chúng tôi</h1>
                              </div>
                              <div id="GROUP50" class="ladi-element">
                                    <div class="ladi-group">
                                       <div id="LINE51" class="ladi-element">
                                          <div class="ladi-line">
                                                <div class="ladi-line-container"></div>
                                          </div>
                                       </div>
                                       <div id="SHAPE52" class="ladi-element">
                                          <div class="ladi-shape">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                   xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%"
                                                   viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
                                                   <path
                                                      d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                                                   </path>
                                                </svg>
                                          </div>
                                       </div>
                                       <div id="LINE53" class="ladi-element">
                                          <div class="ladi-line">
                                                <div class="ladi-line-container"></div>
                                          </div>
                                       </div>
                                    </div>
                              </div>
                              <div id="HEADLINE55" class="ladi-element">
                                    <h2 class="ladi-headline ">NỘI THẤT DAEHEE</h2>
                              </div>
                           </div>
                        </div>
                  </div>
               </div>
               <div id="SECTION19" class="ladi-section">
                  <div class="ladi-section-background"></div>
                  <div class="ladi-container">
                        <div id="GROUP390" class="ladi-element">
                           <div class="ladi-group">
                              <div id="BOX391" class="ladi-element">
                                    <div class="ladi-box"></div>
                              </div>
                              <div id="HEADLINE392" class="ladi-element">
                                    <h3 class="ladi-headline">SỨ MỆNH</h3>
                              </div>
                           </div>
                        </div>
                        <div id="LINE393" class="ladi-element">
                           <div class="ladi-line">
                              <div class="ladi-line-container"></div>
                           </div>
                        </div>
                  </div>
               </div>
               @if (count($services)>0)
                  <div class="c-box-services">
                     <div class="c-box">
                           <div class="container">
                           
                                  <div class="row">
                                    <div class="c-box-item col-sm">
                                          <div class="c-item-img">
                                             <img style="clip-path: circle(160px at 50% 50%);" src="{{asset('frontend/images/imgGioithieu2.jpg')}}"
                                                alt="" srcset="">
                                          </div>
                                    </div>
                                    <div class="col-sm">
                                          <div class="c-box-tittle">
                                             <div class="c-item-tittle">
                                                <h1 class="c-tittle">
                                                   Nội thất DAEHEE
                                                </h1>
                                             </div>
                                          </div>
                                          <div class="c-box-attention">
                                             <div class="c-item-tittle">
                                                <p class="c-tittle">
                                                   Kiến tạo không gian - Ươm mầm hạnh phúc
                                                </p>
                                             </div>
                                          </div>
                                          <div class="c-box-description">
                                             <div class="c-item-tittle">
                                                <p class="c-tittle">
                                                   Nội thất DAEHEE Luôn đặt ra và tuân theo sứ mệnh: “Kiến tạo không gian, ươm mầm hạnh phúc”.
                                                </p>
                                             </div>
                                          </div>
                                    </div>
                                 </div>
                              <div class="row">
                                 <div class="col-sm">
                                       <div class="c-box-tittle">
                                          <div class="c-item-tittle">
                                             <h1 class="c-tittle">
                                                Trải nghiệm sống tuyệt vời
                                             </h1>
                                          </div>
                                       </div>
                                       <div class="c-box-attention">
                                          <div class="c-item-tittle">
                                             <p class="c-tittle">
                                                   Kiến tạo không gian - Ươm mầm hạnh phúc
                                             </p>
                                          </div>
                                       </div>
                                       <div class="c-box-description">
                                          <div class="c-item-tittle">
                                             <p class="c-tittle">
                                                Với ngôn ngữ thiết kế đa dạng, từ cổ điển, hiện đại đến phong cách Bắc Âu Scandinavian… chúng tôi vinh dự là đơn vị thiết kế và thi công nội thất tại những căn hộ cao cấp như: Times City, Royal City, Vinhomes Riverside, Keangnam, Gamuda Garden… Ngoài ra, với kinh nghiệm nhiều năm trong nghề, nội thất DAEHEE cũng để lại ấn tượng khi thi công hàng trăm biệt thự, nhà hàng, nhà phố sang trọng.
                                             </p>
                                          </div>
                                       </div>
                                 </div>
                                 <div class="c-box-item col-sm">
                                       <div class="c-item-img">
                                          <img style="clip-path: circle(160px at 50% 50%);" src="{{asset('frontend/images/imgGioithieu2.jpg')}}"
                                             alt="" srcset="">
                                       </div>
                                 </div>
                              </div>
                           </div>
                     </div>
                  </div>
               @endif
            </div>
            <div id="backdrop-popup" class="backdrop-popup"></div>
            <div id="backdrop-dropbox" class="backdrop-dropbox"></div>
            <div id="lightbox-screen" class="lightbox-screen"></div>
            <script id="script_lazyload" type="text/javascript">
               (function() {
                  var style_lazyload = document.getElementById('style_lazyload');
                  var docEventScroll = window;
                  var list_element_lazyload = document.querySelectorAll(
                        '.ladi-section-background, .ladi-image-background, .ladi-button-background, .ladi-headline, .ladi-video-background, .ladi-countdown-background, .ladi-box, .ladi-frame-background, .ladi-tabs-background, .ladi-survey-option-background, .ladi-survey-option-image, .ladi-banner, .ladi-form-item-background, .ladi-gallery-view-item, .ladi-gallery-control-item, .ladi-spin-lucky-screen, .ladi-spin-lucky-start, .ladi-form-label-container .ladi-form-label-item.image, .ladi-list-paragraph ul li'
                  );
                  for (var i = 0; i < list_element_lazyload.length; i++) {
                        var rect = list_element_lazyload[i].getBoundingClientRect();
                        if (rect.x == "undefined" || rect.x == undefined || rect.y == "undefined" || rect.y == undefined) {
                           rect.x = rect.left;
                           rect.y = rect.top;
                        }
                        var offset_top = rect.y + window.scrollY;
                        if (offset_top >= window.scrollY + window.innerHeight || window.scrollY >= offset_top +
                           list_element_lazyload[i].offsetHeight) {
                           list_element_lazyload[i].classList.add('ladi-lazyload');
                        }
                  }
                  if (typeof style_lazyload != "undefined" && style_lazyload != undefined) {
                        style_lazyload.parentElement.removeChild(style_lazyload);
                  }
                  var currentScrollY = window.scrollY;
                  var stopLazyload = function(event) {
                        if (event.type == "scroll" && window.scrollY == currentScrollY) {
                           currentScrollY = -1;
                           return;
                        }
                        docEventScroll.removeEventListener('scroll', stopLazyload);
                        list_element_lazyload = document.getElementsByClassName('ladi-lazyload');
                        while (list_element_lazyload.length > 0) {
                           list_element_lazyload[0].classList.remove('ladi-lazyload');
                        }
                  };
                  var scrollEventPassive = null;
                  try {
                        var opts = Object.defineProperty({}, 'passive', {
                           get: function() {
                              scrollEventPassive = {
                                    passive: true
                              };
                           }
                        });
                        window.addEventListener('testPassive', null, opts);
                        window.removeEventListener('testPassive', null, opts);
                  } catch (e) {}
                  docEventScroll.addEventListener('scroll', stopLazyload, scrollEventPassive);
               })();
            </script>
            <!--[if lt IE 9]><script src="https://w.ladicdn.com/v2/source/html5shiv.min.js?v=1653875791278"></script><script src="https://w.ladicdn.com/v2/source/respond.min.js?v=1653875791278"></script><![endif]-->
            <link
               href="https://fonts.googleapis.com/css?family=Open Sans:bold,regular|Lobster:bold,regular&amp;display=swap"
               rel="stylesheet" type="text/css">
            <link href="https://w.ladicdn.com/v2/source/ladipage.min.css?v=1653875791278" rel="stylesheet"
               type="text/css">
            <script src="https://w.ladicdn.com/v2/source/ladipage.vi.min.js?v=1653875791278" type="text/javascript"></script>
            <script id="script_event_data" type="application/json">{"VIDEO367":{"type":"video","option.video_value":"https://www.youtube.com/watch?v=NdEHrn6P2Rc","option.video_type":"youtube","option.video_control":true}}</script>
            <script id="script_ladipage_run" type="text/javascript">
               (function() {
                  var run = function() {
                        if (typeof window.LadiPageScript == "undefined" || window.LadiPageScript == undefined ||
                           typeof window.ladi == "undefined" || window.ladi == undefined) {
                           setTimeout(run, 100);
                           return;
                        }
                        window.LadiPageApp = window.LadiPageApp || new window.LadiPageAppV2();
                        window.LadiPageScript.runtime.ladipage_id = '629f18632692e80050433b59';
                        window.LadiPageScript.runtime.publish_platform = 'LADIPAGE';
                        window.LadiPageScript.runtime.is_mobile_only = false;
                        window.LadiPageScript.runtime.version = '1653875791278';
                        window.LadiPageScript.runtime.cdn_url = 'https://w.ladicdn.com/v2/source/';
                        window.LadiPageScript.runtime.DOMAIN_FREE = ["ldp.page"];
                        window.LadiPageScript.runtime.bodyFontSize = 12;
                        window.LadiPageScript.runtime.store_id = "5f27b2f54cf2632d9b32bcf2";
                        window.LadiPageScript.runtime.time_zone = 7;
                        window.LadiPageScript.runtime.currency = "VND";
                        window.LadiPageScript.runtime.convert_replace_str = true;
                        window.LadiPageScript.runtime.desktop_width = 1200;
                        window.LadiPageScript.runtime.mobile_width = 420;
                        window.LadiPageScript.run(true);
                        window.LadiPageScript.runEventScroll();
                  };
                  run();
               })();
            </script>
      </section>
   </main>
@endsection
