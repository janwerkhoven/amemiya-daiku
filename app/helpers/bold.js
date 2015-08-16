// module.exports.register = function(Handlebars, options) {
//   Handlebars.registerHelper('translate', function() {
//     return 'translate and stuff';
//   });
// };
module.exports.register = function(Handlebars, options) {
  Handlebars.registerHelper('bold', function(options) {
    return new Handlebars.SafeString('<div class="mybold">' + options.fn(this) + '</div>');
  });
};