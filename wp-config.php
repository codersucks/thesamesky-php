<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'app_thesamesky');

/** MySQL数据库用户名 */
define('DB_USER', 'nzm1moz2km');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'w3zlj0xxhj4yzy1mk1ikixhh20j1jymw22liky21');

/** MySQL主机 */
define('DB_HOST', 'w.rdc.sae.sina.com.cn');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',SrXUjt0h)0{G@n?]cmp4;,|SZ#NaQFYuVfaza&O^l-L]TOH`I#[yf_h=_b^B{jQ');
define('SECURE_AUTH_KEY',  'G0)UMS/BS[J]$]>`#9,Gbdu^[KC?zQz$$]}wCMZ,m2z8)$%$Gg;p98hj76u(-}U4');
define('LOGGED_IN_KEY',    '_rBKCFX~U%vy6PQ8u:peG8E~Bypfzipfjwtr^<H[GD=|G5Zf4)$a.uJ>Od+n{^Nw');
define('NONCE_KEY',        'AM;Zi/mC,0CG+Q}i3Kq/oDg&ok4OlKa~b/55M8W>*mB$>.87(Md@&:vdY/?[<M7(');
define('AUTH_SALT',        'I3xhQNX#XRxz1QVTbBuNyjVwLbccRdJY_9m&jR>(=|G2WRTH=$a;Bfu*>`^!bv?Z');
define('SECURE_AUTH_SALT', '>qMlTO)72`vosi~WTU$hUb06+ >fe _K{V{XFdV{/pxbSb70X>)=ikBj0l-HJS;@');
define('LOGGED_IN_SALT',   '3J{@#gB$Q.,F%0j[XlPo:N2D~=m7s:gcX5]o1@]$VbDPiDrdA$F#^9_za_bmM|0X');
define('NONCE_SALT',       'f5^fB:e#9Q]n987i1+uECKfz?:8W=ql2|h n;2_aNq2MSa3zm#>h,rqhEmRygS5}');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
