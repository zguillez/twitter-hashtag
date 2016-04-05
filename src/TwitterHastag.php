<?php

	namespace Z;

	use Abraham\TwitterOAuth\TwitterOAuth;

	class TwitterHastag
	{
		private $CONSUMER_KEY;
		private $CONSUMER_SECRET;
		private $access_token;
		private $access_token_secret;
		private $connection;
		private $hashtag;
		private $data;
		public function __construct($config)
		{
			$this->CONSUMER_KEY        = $config["CONSUMER_KEY"];
			$this->CONSUMER_SECRET     = $config["CONSUMER_SECRET"];
			$this->access_token        = $config["access_token"];
			$this->access_token_secret = $config["access_token_secret"];
			$this->connection          = new TwitterOAuth($this->CONSUMER_KEY, $this->CONSUMER_SECRET, $this->access_token, $this->access_token_secret);
			$this->connection->host    = 'https://api.twitter.com/1.1/';
		}
		public function get($hashtag, $count)
		{
			$this->hashtag = $hashtag;
			$this->data    = $this->connection->get("search/tweets", ["q" => $this->hashtag, "result_type" => "recent", "count" => $count]);

			return $this->data->statuses;
		}
	}


