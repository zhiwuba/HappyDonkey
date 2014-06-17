<?php

class ControllerCommonFooter extends Controller
{
    public function  index()
    {
        $this->template="common/footer.php";

        $this->render();
    }
}

?>
