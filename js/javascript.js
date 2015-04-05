$( document ).ready(function() {


$('body').flowtype({
	minimum: 300,
	maximum: 1000,
	minFont: 12,
	maxFont: 25,
	fontRatio: 30
});

/*
$('#particles-canvas').particleground({
	parallax: false,
	curvedLines: false,
	dotColor: '#0f0',
	lineColor: '#0f0',
	density: 18000,
	maxSpeedY: 0.2,
	maxSpeedX: 0.2,
	minSpeedY: 0.2,
	minSpeedX: 0.2,
	proximity: 140,
	particleRadius: 7,
	lineWidth: 1

});
*/

particlesJS('particles-canvas', {
  particles: {
    color: '#0f0',
    color_random: false,
    shape: 'circle', // "circle", "edge" or "triangle"
    opacity: {
      opacity: 1,
      anim: {
        enable: true,
        speed: 1.5,
        opacity_min: 0,
        sync: false
      }
    },
    size: 4,
    size_random: false,
    nb: 130,
    line_linked: {
      enable_auto: true,
      distance: 100,
      color: '#0f0',
      opacity: 1,
      width: 2,
      condensed_mode: {
        enable: false,
        rotateX: 600,
        rotateY: 600
      }
    },
    anim: {
      enable: true,
      speed: 1
    }
  },
  interactivity: {
    enable: true,
    mouse: {
      distance: 300
    },
    detect_on: 'canvas', // "canvas" or "window"
    mode: 'grab', // "grab" of false
    line_linked: {
      opacity: .6
    },
    events: {
      onclick: {
        enable: true,
        mode: 'push', // "push" or "remove"
        nb: 3
      },
      onresize: {
        enable: true,
        mode: 'bounce', // "out" or "bounce"
        density_auto: false,
        density_area: 800 // nb_particles = particles.nb * (canvas width *  canvas height / 1000) / density_area
      }
    }
  },
  /* Retina Display Support */
  retina_detect: true
});









});