<?php
/*
//(C) OXID-Design 2015
//
// The source contained in this file is the property of the OXID-Design
// (Leipziger Allee 36, 76139 Karlsruhe, Germany, www.oxid-design.com).
//
// GNU GENERAL PUBLIC LICENSE
//
//This program is free software;
//you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation;
//either version 3 of the License, or (at your option) any later version.
//
//This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
//without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
// You should have received a copy of the GNU General Public License along with this program; if not, see <http://www.gnu.org/licenses/>
*/
$sMetadataVersion = '1.0';
$aModule = array(
    'id'               => 'OD-FlowPop',
    'title'            => '<img src='.oxRegistry::getConfig()->getShopUrl().'modules/OXID-Design/OD-FlowPop/out/img/favicon.ico alt="OXID-Design" title="OXID-Design Projects"> Flow-Theme Popup',
    'type'             => 'modules',
    'paid'             => 'free',
    'description'      =>  array(
    'de'               => 'Flow-Theme Popup',
    'en'               => 'Flow-Theme Popup',
    ),
    'thumbnail'        => '/out/img/logo.png',
    'version'          => '1.0',
    'author'           => 'Rafig',
    'url'              => 'https://www.oxid-design.com',
    'email'            => 'support@oxid-design.com',
    'extend'           => array (
    'oxviewconfig'     => 'OXID-Design/OD-FlowPop/core/od_flow_pop'
    ),
    'files'            => array (
    'od_flow_pop'      => 'OXID-Design/OD-FlowPop/core/od_flow_pop.php'
    ),
    'templates'        => array (
    'od_flow_pop.tpl'  => 'OXID-Design/OD-FlowPop/views/tpl/od_flow_pop.tpl'
    ),
    'events'           => array(
    'onActivate'       => 'od_flow_pop::onActivate',
    'onDeactivate'     => 'od_flow_pop::onDeactivate'
    ),
    'settings'         => array (
                          array (
    'group'            => 'odFlowPop',
    'name'             => 'odHomePop',
    'type'             => 'bool',
    'value'            => 'true'),
                          array (
    'group'            => 'odFlowPop',
    'name'             => 'odOpenPop',
    'type'             => 'str',
    'value'            => '3000'),
                          array (
    'group'            => 'odFlowPop',
    'name'             => 'odClosePop',
    'type'             => 'str',
    'value'            => '3000'),
    ),
    'blocks'           => array (
                          array (
    'template'	       => 'layout/footer.tpl',
    'block'		       => 'footer_main',
    'file'		       => '/views/tpl/od_flow_pop.tpl'
    ),
    )
);
