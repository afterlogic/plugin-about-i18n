<?php

/*
 * Copyright (C) 2002-2013 AfterLogic Corp. (www.afterlogic.com)
 * Distributed under the terms of the license described in LICENSE
 *
 */

class_exists('CApi') or die();

class CAboutPlugin extends AApiPlugin
{
	/**
	 * @param CApiPluginManager $oPluginManager
	 */
	public function __construct(CApiPluginManager $oPluginManager)
	{
		parent::__construct('1.0', $oPluginManager);
	}

	 public function Init()
     {
          parent::Init();

          $this->SetI18N(true);
          $this->AddJsFile('js/CAboutViewModel.js');
          $this->AddTemplate('AboutTemplate', 'templates/AboutTemplate.html');
     }
}

return new CAboutPlugin($this);
