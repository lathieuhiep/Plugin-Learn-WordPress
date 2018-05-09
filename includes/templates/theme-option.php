<?php

// Xử lý thông tin khi submit
if ( !empty( $_POST['save-theme-option'] ) ) :

    $email = $_POST['email'];
    $pass = $_POST['password'];

    // Cập nhật (nếu chưa có thì hệ thống tự thêm mới)
    update_option( 'mailer_gmail_username', $email );
    update_option( 'mailer_gmail_password', $pass );

endif;

// Lấy thông tin trong bảng Options
$email      =   get_option( 'mailer_gmail_username' );
$password   =   get_option( 'mailer_gmail_password' );

?>

<div id="theme-option-panel">
    <h1>
        <?php esc_html_e( 'Welcome to Theme Options Page', 'wp-learn' ); ?>
    </h1>

    <form method="post" action="">
        <table>
            <tr>
                <td>
                    <?php esc_html_e( 'Email', 'wp-learn' ); ?>
                </td>

                <td>
                    <input type="text" name="email" value="<?php echo esc_attr( $email ); ?>"/>
                </td>
            </tr>

            <tr>
                <td>
                    <?php esc_html_e( 'Password', 'wp-learn' ); ?>
                </td>

                <td>
                    <input type="text" name="password" value="<?php echo esc_attr( $password ); ?>"/>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save-theme-option" value="Save Theme Option"/>
                </td>
            </tr>
        </table>
    </form>
</div>
