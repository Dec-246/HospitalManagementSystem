<?php

function hash_password($toHash)
{
    return hash("sha256", $toHash);
}

?>