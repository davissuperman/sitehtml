<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */
define("FS_METHOD", "direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);
//* 添加 FTP 信息，防止每次都提示输入
define('FTP_HOST', 'localhost'); //主机名,即服务器域名或IP，如果不行试下ftp://ftp.yoursite.com
define('FTP_USER', ''); //FTP或SSH用户名
define('FTP_PASS', ''); // FTP用户密码
//如果你的 FTP 可以使用 SSL 连接，把下面设置为 True
//define('FTP_SSL', true);


// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'morita');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'YLNP#oTm6Ux^m[9bUa`O;_m2[+T5x:!E4j|tS6*d8B[rHW|X>n1aT9JY*b1ps@@!');
define('SECURE_AUTH_KEY',  '-i2h Te[!u0;m+zG;[Y#s03$M|9y0g0Md(}B-er55!_}0)CS|L4`H?}Hm*^s-I~-');
define('LOGGED_IN_KEY',    'Z6U[4b*-&~b.Mu?<HaIn{WA|P#bQ0+Wmg|nFF},(:LNP)~dt=U#1y!~J-uC7F]*0');
define('NONCE_KEY',        '5!TbN|MO]]1_vrWo>[M-a39z#d(rHDh|#ylk]p+/*`Ld=R-$2$ ;/~f+)@+~3<Ny');
define('AUTH_SALT',        ';Y{HkUt08iq%Vpo`-xRg0P+RbD+kJj}]j2U>rLP<zTWVP5y4b}/N;7xg0G9*7>$I');
define('SECURE_AUTH_SALT', 'w8giU4<k`,f:8Dta!Mj1_hICl^19/ng@tYGm/PJiU3>3Qw2e<;tZ*3~}z2ZjE8{E');
define('LOGGED_IN_SALT',   'U|xz3p+W,|zo0t9Q5vC<V#A-K-BRi#E@/WaGqWNp1N5e_^8.9{|T/jY*Xa|8?h4r');
define('NONCE_SALT',       'TO4PlT#t.sX{IQI/O%wv8}>QsBsw4] bt4-[JpTE;;;m( o?^`|Peqr`Mt/oDQjO');

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
