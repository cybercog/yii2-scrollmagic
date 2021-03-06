<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace claudejanz\scrollmagic;

/**
 * Description of ScrollMagic
 *
 * @author Claude
 */
class ScrollMagic extends ScrollWidget {

    public function init() {
        parent::init();

        $this->setJs('var ' . $this->id . ' = new ScrollMagic();');
    }

    public function addScene($scenes) {
        foreach ($scenes as $key => $scene) {

            $this->setJs($this->id . '.addScene(' . $scene . ');');
        }
    }

}
