<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }

 if ( ! defined( 'ABSPATH' ) ) { exit; } class FS_Lock { private static $_thread_id; private $_lock_id; function __construct( $lock_id ) { if ( ! fs_starts_with( $lock_id, WP_FS___OPTION_PREFIX ) ) { $lock_id = WP_FS___OPTION_PREFIX . $lock_id; } $this->_lock_id = $lock_id; if ( ! isset( self::$_thread_id ) ) { self::$_thread_id = mt_rand( 0, 32000 ); } } function try_lock( $expiration = 0 ) { if ( $this->is_locked() ) { return false; } set_site_transient( $this->_lock_id, self::$_thread_id, $expiration ); if ( $this->has_lock() ) { $this->lock($expiration); return true; } return false; } function lock( $expiration = 0 ) { set_site_transient( $this->_lock_id, true, $expiration ); } function is_locked() { return ( false !== get_site_transient( $this->_lock_id ) ); } function unlock() { delete_site_transient( $this->_lock_id ); } protected function has_lock() { return ( self::$_thread_id == get_site_transient( $this->_lock_id ) ); } }