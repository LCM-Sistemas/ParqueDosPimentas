this["wc-bookings"]=this["wc-bookings"]||{},this["wc-bookings"]["admin-edit-booking"]=function(e){var n={};function t(o){if(n[o])return n[o].exports;var r=n[o]={i:o,l:!1,exports:{}};return e[o].call(r.exports,r,r.exports,t),r.l=!0,r.exports}return t.m=e,t.c=n,t.d=function(e,n,o){t.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:o})},t.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},t.t=function(e,n){if(1&n&&(e=t(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(t.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var r in e)t.d(o,r,function(n){return e[n]}.bind(null,r));return o},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="",t(t.s=243)}({243:function(e,n){!function(e){function n(){var e=arguments.length>0&&void 0!==arguments[0]&&arguments[0];return!1!==e&&moment(e,"YYYY-MM-DD",!0).isValid()}function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"";0!==e.length&&alert(e)}e('#woocommerce-booking-save input[name="save"]').on("click",(function(o){var r=e("#booking_start_date"),i=e("#booking_end_date"),a=r.val(),u=i.val();if(!n(a)||!n(u))return o.preventDefault(),void t(wc_bookings_admin_edit_booking_params.invalid_start_end_date);n(a)&&n(u)&&!function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"";return 0!==e.length&&0!==n.length&&!moment(n).isBefore(e)}(a,u)&&(o.preventDefault(),t(wc_bookings_admin_edit_booking_params.date_range_invalid))}))}(jQuery)}});
//# sourceMappingURL=admin-edit-booking.js.map