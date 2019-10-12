<template>
<div id="app">
    <div class="particles">
        <div id="particles-js">
            <div id="main" class="has-text-centered">
                <vue-typed-js
                    :strings="[
                            'Do it. Just Do it.',
                            'Dont let your dreams be dreams.',
                            'Yesterday, you said tomorrow. So just do it!',
                            'Make your dreams come true!',
                            'Some people dream success.',
                            'while you are gonna wake up and work hard any!',
                            'Nothing is impossible!',
                            'You should get to the point where anyone else will quit and you are not gonna stop there',
                            'If you are tired of starting over, stop giving up'
                        ]"
                    :loop="true" @onComplete="doSmth()">
                    <h1><span class="typing"></span></h1>
                </vue-typed-js>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import 'particles.js'
export default {
  name: "particles",
  mounted() {
    this.initParticles()
  },
    methods: {
    initParticles() {
      window.particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 50,
                        "density": {
                            "enable": true,
                            "value_area": 700
                        }
                    },
                    "color": { "value":[
                        "#fa5477",
                        "#47e4bb",
                        "#1089ff",
                        "#512c96",
                        "#f45905",
                        "#e86ed0",
                        "#5edfff",
                        "ffd369",
                    ]},
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#333"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                    },
                    "opacity": {
                        "value": .5,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 10,
                        "random": true,
                        "anim": {
                            "enable": true,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#fff",
                        "opacity": 1,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": true,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                                "enable": true,
                                "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 140,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            })
    }
  }
}
</script>

<style scope>
html,
body,
#app {
  height: 100%;
}

#app {
  position: relative;
  /* background: url("/img/8.jpg") ; */
  background-size: cover;
}

#main {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%);
}
h1 {
  font-size: 3em;
}

#particles-js {
  width: 100%;
  height: 100%;
  background: rgb(255, 255, 255);
}
</style>
