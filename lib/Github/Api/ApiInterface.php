<?php

namespace Github\Api;

/**
 * Api interface.
 *
 * @author Janos Vajda <vajdajanos@gmail.com>
 */
interface ApiInterface
{
    public function getPerPage();

    public function setPerPage($perPage);
}
