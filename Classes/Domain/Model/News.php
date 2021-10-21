<?php
namespace T3S\NewsPlan\Domain\Model;

/***
 *
 * This file is part of the "Extend News" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 John Doe
 *
 ***/

/**
 * News
 */
class News extends \GeorgRinger\News\Domain\Model\News {

        /**
         * eventhall
         * @var string
         */
        protected $eventhall;

        /**
         * Set eventhall
         *
         * @param string $eventhall
         * @return void
         */
        public function setEventhall($eventhall) {
                $this->eventhall = $eventhall;
        }
        /**
         * Get eventhall
         *
         * @return string
         */
        public function getEventhall() {
                return $this->eventhall;
        }



        /**
         * eventprice
         * @var string
         */
        protected $eventprice;

        /**
         * Set eventprice
         *
         * @param string $eventprice
         * @return void
         */
        public function setEventprice($eventprice) {
                $this->eventprice = $eventprice;
        }
        /**
         * Get eventprice
         *
         * @return string
         */
        public function getEventprice() {
                return $this->eventprice;
        }



        /**
         * priceinfo
         * @var string
         */
        protected $priceinfo;

        /**
         * Set priceinfo
         *
         * @param string $priceinfo
         * @return void
         */
        public function setPriceinfo($priceinfo) {
                $this->priceinfo = $priceinfo;
        }
        /**
         * Get priceinfo
         *
         * @return string
         */
        public function getPriceinfo() {
                return $this->priceinfo;
        }


}
