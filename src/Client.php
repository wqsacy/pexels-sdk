<?php

	namespace Wangqs\PexelsSdk;


	class Client
	{
		/**
		 * @var string
		 */
		private $token;

		/**
		 * @var \GuzzleHttp\Client
		 */
		private $client;

		/**
		 * @param string $token
		 */
		public function __construct ( $token ) {
			$this->token = $token;
		}

		/**
		 * @author     :  Wangqs  2021/3/30
		 * @description:    图片搜索
		 */
		public function search ( $query , $size = 15 , $page = 1 ) {
			return $this->getClient()
			            ->get( 'search?' . http_build_query( [
					            'query'    => $query ,
					            'per_page' => $size ,
					            'page'     => $page
				            ] ) );
		}

		/**
		 * @author     :  Wangqs  2021/3/30
		 * @description:    图片精选
		 */
		public function curated ( $size = 15 , $page = 1 ) {
			return $this->getClient()
			            ->get( 'curated?' . http_build_query( [
					            'per_page' => $size ,
					            'page'     => $page
				            ] ) );
		}

		/**
		 * @author     :  Wangqs  2021/3/30
		 * @description:    视频搜索
		 */
		public function videoSearch ( $query , $size = 15 , $page = 1 ) {
			return $this->getClient()
			            ->get( 'videos/search?' . http_build_query( [
					            'query'    => $query ,
					            'per_page' => $size ,
					            'page'     => $page
				            ] ) );
		}

		/**
		 * @author     :  Wangqs  2021/3/30
		 * @description:    视频精选
		 */
		public function videoCurated ( $size = 15 , $page = 1 ) {
			return $this->getClient()
			            ->get( 'videos/popular?' . http_build_query( [
					            'per_page' => $size ,
					            'page'     => $page
				            ] ) );
		}

		/**
		 * @return \GuzzleHttp\Client
		 */
		private function getClient () {
			if ( null === $this->client ) {
				$this->client = new \GuzzleHttp\Client( [
					'base_uri' => 'https://api.pexels.com/v1/' ,
					'headers'  => [
						'Authorization' => $this->token
					]
				] );
			}

			return $this->client;
		}




	}
