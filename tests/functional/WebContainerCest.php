<?php


class WebContainerCest
{
    public function _before(FunctionalTester $I)
    {
    }

    public function _after(FunctionalTester $I)
    {
    }


    public function checkConnectionWithDB(FunctionalTester $I){
        $I->wantTo("verify mariadb 10.1 container is linked with php 7.1 container properly");
        $I->runShellCommand("docker exec dev_web ping db -c 2");
        $I->seeInShellOutput('2 packets transmitted, 2 packets received');
    }

}