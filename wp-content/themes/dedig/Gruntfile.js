module.exports = function(grunt) {

  grunt.initConfig({
    sass: {
      dist: {
        files: {
          'style.css': 'style.scss',
        }
      }
    },

    uglify: {
      build: {
        files: {
          'js/functions.min.js': 'js/functions.js',
        }
      }
    },

    watch: {
      scripts: {
        files: '**/*',
        tasks: ['sass', 'uglify'],
        options: {
          interrupt: true,
          event: ['changed', 'added', 'deleted'],
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['sass','uglify','watch']);
};