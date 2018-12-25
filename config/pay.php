<?php

return [
	'alipay' => [
		'app_id' => '2016093000634730',
		'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEArLmFzvOm+E0DgLqgppNbEbnMwLRePITkpXUfYsbf5RltG25llKjjDRwWvkajFQZ4vjdbsM5rtIX3CPKKoMxjtA7+ddMhgUrC78NehCqLb9mLKiTPQ5vc617X7ZIRAtWYkdjAd63UQYbINPo3kTImOhOlzXPYy636ERL9iIeodlAaCZ+U4shsjcfS4FEQnORsDaQbHpZPvJHfNqFF2KTNf6Oezmc28YpMm1uSneqSzmeFqz0OFXaxwqxIlyWAm0bQUoExYwAhEOCpVmXmUrAn8JSPRL2qP/eVL2IxXZb5hswoYcKPFCrOZMB8eha3q1OwXxV3NTBuu1XD/hGaMd0J5wIDAQAB',
		'private_key' => 'MIIEowIBAAKCAQEA0tpJDmn3Uh2dEZENJxYmxF+rQFdhrW/T+QyxhHUDnHp4iPPyT4pGf3d0BYNrcVO1ZZ05vRVUuktsLdabivhGLlp0aSj30q11r7iAjl+hfwPTBx9yDqXDfeqfP63THb6vcFGTzhSm8TGvrx8QQqb0+x2tbuRjd3qGYkXte9k3BS16Gd6WVWWBEsBCToMUWBv/n/zOwCc4XcXJL3f/TEP66/nHYKRR0WLE9q46tENsUGAvh3G3C6Joyvs22IQj4xY3X3M2W22WRtNadPCgVzRPVwoR3DsFvNznYXxKdtYCX/RMKOqjOcs8XMvo7DWvXw7cVa9tN8gHK0wD2/HCDNJoYwIDAQABAoIBAFr4+1RQu/id9krB/p7Cm+9WJ5kXGnmuKhLmOyEfK3O0E5VjS0SuMESG0XQfg5fdugIhl+vQ7EGEkSQl1+5ZuE3/kQJePq6TUJeET1MeR5t5lu8XziorsvD87cCXyuKmhyM6zz63AmBGQ7qW+HkJd+FwqIeT2qaOIrT73r70tRxx/iDx4dShtKdOsqbneBg6pGNTcaTwDpRybNMacUF8OId3tskm1wn8vm/LCusBYS+VOJ2n5jAT3TYr97Fkq6x/TibXviL1SswRBMe/azRmgufBVYu0WGftlmRs2NeoUfLB5B5j6wMriT0ctBgLr2h2yrq6lnMe9cnmM6eF3XNgcQECgYEA6zJtkeA3C39aXdcbUtbdnZmEfcBBJJGKXEWXjvatBu5iXyWwv6RFKD8zUN5wQmlUXnHyYzoxi55LWN+/3ssP3ruG2WM2YFB6532ZeoNlMQqB+joAPTcvYtKFTeqlY3uahw2w5eLSF/Sj9X3FQvH1oyy6RheEn35jPUIKVE3/lKECgYEA5YCg521dBPnRgQsRkxSl4NSarNYE+P6Y627c4vQozoLuTSuU8N6azT0+MYV2WCPBigFSPeiZfCM5bc2hyLkLI4fNwMnUgrA8aVOBITrS2s+W7bAebSaPgt/Wq/dD+xoz+OP2QmZgo7HfAQqPykrtqiKk9p6RCmETh+8/a8dRGoMCgYAKCpce+UGgXgmPpBVojf/cMKe1brXZR9VuZxI3alSszRSqF0PairrhIwGf3D9StoiBl7/PeLaQzWtOGg9pBaZhzgPN2CyEJCt7IqOg1WdGlrpB4qQL+QUu5OoID5KMEsTgKzd4ORzbJPizDHGVkBr6ong5cduZq521CdLDEqlswQKBgGoadMlp41Z4lOZfEqn4ItR2FmiPrc7cDiDSqWZ30SHgoIGnA330vIbkqItGk7ceGM1P3RDoJ4Wf114vcnuVKVQs5fAan5goGFXtmEafpnoo/TM4eGioKjMsf1gTwicmLx8DbYe3QziK9HnLwzyYNZax26h1GMM+rEPtVVnj1Vg3AoGBAM+SXNCuD/5idifs9SEtvcoLobB0t7/ILIHVVf5LH6aKlwUAQtJtyR/paZwPZlqJ2C5CiRMsk96c1n/4bTr70fxjiRlitySD+RQ8/2No4U7F/7hFRk/iIAcdwNKK1C24kdvkHVcVx3tW8iZEC+n+mDSKImLHf7bJ0zZt/FrzPLs0',
		'log' => [
			'file' => storage_path('logs/alipay.log'),
		],
	],

	'wechat' => [
		'app_id' => '',
		'mch_id' => '',
		'key' => '',
		'cert_client' => '',
		'cert_key' => '',
		'log' => [
			'log' => storage_path('logs/wechat_pay.log'),
		],
	],
];