module.exports = function(grunt) {

  'use strict';

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    connect: {
      server: {
        options: {
          port: 9000,
          base: 'dist',
          hostname: 'localhost',
          livereload: true,
          open: false
        }
      }
    },
    watch: {
      handlebars: {
        files: ['app/templates/**/*.hbs', 'app/locale/**/*.json', 'app/templates/layout.html '],
        tasks: 'handlebarslayouts'
      },
      sass: {
        files: ['app/sass/**/*.scss'],
        tasks: ['sass']
      },
      js: {
        files: ['app/js/**/*.js'],
        tasks: ['jshint', 'concat', 'uglify']
      },
      gruntfile: {
        files: ['Gruntfile.js', 'app/helpers/**/*.js'],
        tasks: 'build'
      },
      options: {
        livereload: true,
      }
    },
    handlebarslayouts: {
      english: {
        files: [{
          src: ['**/*.hbs', '!partials/*'],
          dest: 'dist/en/',
          ext: '.html',
          cwd: 'app/templates/',
          expand: true
        }],
        options: {
          partials: ['app/templates/partials/*.hbs', 'app/templates/layout.html'],
          basePath: 'app/templates/',
          modules: ['app/helpers/*.js', 'handlebars-helpers'],
          context: 'app/locale/en.json'
            // context: {
            //   language: 'en',
            //   en: 'app/locale/en.json'
            //     // en: {
            //     //   phrase1: "Damn",
            //     //   phrase2: "This was gooood"
            //     // },
            //     // jp: {
            //     //   phrase1: "Kuso!",
            //     //   phrase2: "Oishiii"
            //     // }
            // }
        }
      },
      japanese: {
        files: [{
          expand: true,
          cwd: 'app/templates/',
          src: ['**/*.hbs', '!partials/*'],
          dest: 'dist//jp/',
          ext: '.html',
        }],
        options: {
          partials: ['app/templates/partials/*.hbs', 'app/templates/layout.html'],
          basePath: 'app/templates/',
          modules: ['app/helpers/*.js', 'handlebars-helpers'],
          context: 'app/locale/jp.json'
        }
      }
    },
    sass: {
      dist: {
        options: {
          style: 'compressed',
          noCache: true
        },
        files: {
          'dist/assets/css/main.min.css': 'app/sass/main.scss'
        }
      }
    },
    jshint: {
      files: ['app/js/*.js'],
      options: {
        globals: {
          jQuery: true,
          console: true,
          module: true,
          document: true
        }
      }
    },
    concat: {
      options: {
        separator: ';\n\n',
      },
      dist: {
        src: ['app/js/libs/jquery.js', 'app/js/libs/velocity.js', 'app/js/libs/modernizr.js', 'app/js/jquery.lightbox-0.5.js', 'app/js/main.js'],
        dest: 'dist/assets/js/main.js',
      },
    },
    uglify: {
      dist: {
        files: {
          'dist/assets/js/main.min.js': ['dist/assets/js/main.js']
        }
      }
    },
    clean: {
      build: {
        src: ['dist/']
      }
    },
    copy: {
      main: {
        files: [{
          expand: true,
          cwd: 'public/',
          src: ['**'],
          dest: 'dist/'
        }]
      }
    },
    po_json: {
      target: {
        files: {
          'locale/ja.json': 'locale/ja.po'
        }
      }
    }
  });

  // load tasks
  grunt.loadNpmTasks('grunt-contrib-connect');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks("grunt-handlebars-layouts");
  grunt.loadNpmTasks('grunt-html-prettyprinter');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-po-json');

  // commands
  grunt.registerTask('default', ['clean', 'copy', 'handlebarslayouts', 'sass', 'jshint', 'concat', 'uglify', 'connect', 'watch']);
  grunt.registerTask('build', ['clean', 'copy', 'handlebarslayouts', 'sass', 'jshint', 'concat', 'uglify']);
  grunt.registerTask('server', ['connect', 'watch']);
  grunt.registerTask('locale', ['po_json']);

};