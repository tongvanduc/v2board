-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 23, 2021 lúc 02:27 PM
-- Phiên bản máy phục vụ: 5.6.50-log
-- Phiên bản PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `v2board`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_commission_log`
--

CREATE TABLE `v2_commission_log` (
  `id` int(11) NOT NULL,
  `invite_user_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trade_no` char(36) NOT NULL,
  `order_amount` int(11) NOT NULL,
  `get_amount` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_coupon`
--

CREATE TABLE `v2_coupon` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `type` tinyint(1) NOT NULL,
  `value` int(11) NOT NULL,
  `limit_use` int(11) DEFAULT NULL,
  `limit_use_with_user` int(11) DEFAULT NULL,
  `limit_plan_ids` varchar(255) DEFAULT NULL,
  `started_at` int(11) NOT NULL,
  `ended_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_invite_code`
--

CREATE TABLE `v2_invite_code` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` char(32) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `pv` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_knowledge`
--

CREATE TABLE `v2_knowledge` (
  `id` int(11) NOT NULL,
  `language` char(5) NOT NULL COMMENT '語言',
  `category` varchar(255) NOT NULL COMMENT '分類名',
  `title` varchar(255) NOT NULL COMMENT '標題',
  `body` text NOT NULL COMMENT '內容',
  `sort` int(11) DEFAULT NULL COMMENT '排序',
  `show` tinyint(1) NOT NULL DEFAULT '0' COMMENT '顯示',
  `created_at` int(11) NOT NULL COMMENT '創建時間',
  `updated_at` int(11) NOT NULL COMMENT '更新時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='知識庫';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_mail_log`
--

CREATE TABLE `v2_mail_log` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `template_name` varchar(255) NOT NULL,
  `error` text,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_notice`
--

CREATE TABLE `v2_notice` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_order`
--

CREATE TABLE `v2_order` (
  `id` int(11) NOT NULL,
  `invite_user_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `coupon_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL COMMENT '1新购2续费3升级',
  `cycle` varchar(255) NOT NULL,
  `trade_no` varchar(36) NOT NULL,
  `callback_no` varchar(255) DEFAULT NULL,
  `total_amount` int(11) NOT NULL,
  `discount_amount` int(11) DEFAULT NULL,
  `surplus_amount` int(11) DEFAULT NULL COMMENT '剩余价值',
  `refund_amount` int(11) DEFAULT NULL COMMENT '退款金额',
  `balance_amount` int(11) DEFAULT NULL COMMENT '使用余额',
  `surplus_order_ids` text COMMENT '折抵订单',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0待支付1开通中2已取消3已完成4已折抵',
  `commission_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0待确认1发放中2有效3无效',
  `commission_balance` int(11) NOT NULL DEFAULT '0',
  `paid_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_payment`
--

CREATE TABLE `v2_payment` (
  `id` int(11) NOT NULL,
  `uuid` char(32) NOT NULL,
  `payment` varchar(16) NOT NULL,
  `name` varchar(255) NOT NULL,
  `config` text NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_plan`
--

CREATE TABLE `v2_plan` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `transfer_enable` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `show` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  `renew` tinyint(1) NOT NULL DEFAULT '1',
  `content` text,
  `month_price` int(11) DEFAULT NULL,
  `quarter_price` int(11) DEFAULT NULL,
  `half_year_price` int(11) DEFAULT NULL,
  `year_price` int(11) DEFAULT NULL,
  `two_year_price` int(11) DEFAULT NULL,
  `three_year_price` int(11) DEFAULT NULL,
  `onetime_price` int(11) DEFAULT NULL,
  `reset_price` int(11) DEFAULT NULL,
  `reset_traffic_method` tinyint(1) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_server_group`
--

CREATE TABLE `v2_server_group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_server_log`
--

CREATE TABLE `v2_server_log` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `server_id` int(11) NOT NULL,
  `u` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `method` varchar(255) NOT NULL,
  `log_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_server_shadowsocks`
--

CREATE TABLE `v2_server_shadowsocks` (
  `id` int(11) NOT NULL,
  `group_id` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `rate` varchar(11) NOT NULL,
  `host` varchar(255) NOT NULL,
  `port` int(11) NOT NULL,
  `server_port` int(11) NOT NULL,
  `cipher` varchar(255) NOT NULL,
  `show` tinyint(4) NOT NULL DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_server_trojan`
--

CREATE TABLE `v2_server_trojan` (
  `id` int(11) NOT NULL COMMENT '节点ID',
  `group_id` varchar(255) NOT NULL COMMENT '节点组',
  `parent_id` int(11) DEFAULT NULL COMMENT '父节点',
  `tags` varchar(255) DEFAULT NULL COMMENT '节点标签',
  `name` varchar(255) NOT NULL COMMENT '节点名称',
  `rate` varchar(11) NOT NULL COMMENT '倍率',
  `host` varchar(255) NOT NULL COMMENT '主机名',
  `port` int(11) NOT NULL COMMENT '连接端口',
  `server_port` int(11) NOT NULL COMMENT '服务端口',
  `allow_insecure` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否允许不安全',
  `server_name` varchar(255) DEFAULT NULL,
  `show` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示',
  `sort` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='trojan伺服器表';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_server_v2ray`
--

CREATE TABLE `v2_server_v2ray` (
  `id` int(11) NOT NULL,
  `group_id` varchar(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `host` varchar(255) NOT NULL,
  `port` int(11) NOT NULL,
  `server_port` int(11) NOT NULL,
  `tls` tinyint(4) NOT NULL DEFAULT '0',
  `tags` varchar(255) DEFAULT NULL,
  `rate` varchar(11) NOT NULL,
  `network` text NOT NULL,
  `alter_id` int(11) NOT NULL DEFAULT '1',
  `settings` text,
  `rules` text,
  `networkSettings` text,
  `tlsSettings` text,
  `ruleSettings` text,
  `dnsSettings` text,
  `show` tinyint(1) NOT NULL DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_stat_order`
--

CREATE TABLE `v2_stat_order` (
  `id` int(11) NOT NULL,
  `order_count` int(11) NOT NULL COMMENT '订单数量',
  `order_amount` int(11) NOT NULL COMMENT '订单合计',
  `commission_count` int(11) NOT NULL,
  `commission_amount` int(11) NOT NULL COMMENT '佣金合计',
  `record_type` char(1) NOT NULL,
  `record_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单统计';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_stat_server`
--

CREATE TABLE `v2_stat_server` (
  `id` int(11) NOT NULL,
  `server_id` int(11) NOT NULL COMMENT '节点id',
  `server_type` char(11) NOT NULL COMMENT '节点类型',
  `u` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL,
  `record_type` char(1) NOT NULL COMMENT 'd day m month',
  `record_at` int(11) NOT NULL COMMENT '记录时间',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='节点数据统计';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_ticket`
--

CREATE TABLE `v2_ticket` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_reply_user_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:已开启 1:已关闭',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_ticket_message`
--

CREATE TABLE `v2_ticket_message` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `message` text CHARACTER SET utf8mb4 NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `v2_user`
--

CREATE TABLE `v2_user` (
  `id` int(11) NOT NULL,
  `invite_user_id` int(11) DEFAULT NULL,
  `telegram_id` bigint(20) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `password_algo` char(10) DEFAULT NULL,
  `password_salt` char(10) DEFAULT NULL,
  `balance` int(11) NOT NULL DEFAULT '0',
  `discount` int(11) DEFAULT NULL,
  `commission_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0: system 1: cycle 2: onetime',
  `commission_rate` int(11) DEFAULT NULL,
  `commission_balance` int(11) NOT NULL DEFAULT '0',
  `t` int(11) NOT NULL DEFAULT '0',
  `u` bigint(20) NOT NULL DEFAULT '0',
  `d` bigint(20) NOT NULL DEFAULT '0',
  `transfer_enable` bigint(20) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_staff` tinyint(1) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL,
  `last_login_ip` int(11) DEFAULT NULL,
  `uuid` varchar(36) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `remind_expire` tinyint(4) DEFAULT '0',
  `remind_traffic` tinyint(4) DEFAULT '0',
  `token` char(32) NOT NULL,
  `remarks` text,
  `expired_at` bigint(20) DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `v2_user`
--

INSERT INTO `v2_user` (`id`, `invite_user_id`, `telegram_id`, `email`, `password`, `password_algo`, `password_salt`, `balance`, `discount`, `commission_type`, `commission_rate`, `commission_balance`, `t`, `u`, `d`, `transfer_enable`, `banned`, `is_admin`, `is_staff`, `last_login_at`, `last_login_ip`, `uuid`, `group_id`, `plan_id`, `remind_expire`, `remind_traffic`, `token`, `remarks`, `expired_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'v2board@gmail.com', '$2y$10$K07NzhadkBM6msEo.zzmHOJA25MC0LFuKl.Yco60Ocv9cQAg7KWai', NULL, NULL, 0, NULL, 0, NULL, 0, 0, 0, 0, 0, 0, 1, 0, NULL, NULL, '0cbf4102-57e9-4826-844b-f26956d3cc3d', NULL, NULL, 0, 0, 'dbe95140687227cfedac38d74df03266', NULL, 0, 1634966119, 1634966119);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_commission_log`
--
ALTER TABLE `v2_commission_log`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_coupon`
--
ALTER TABLE `v2_coupon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_invite_code`
--
ALTER TABLE `v2_invite_code`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_knowledge`
--
ALTER TABLE `v2_knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_mail_log`
--
ALTER TABLE `v2_mail_log`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_notice`
--
ALTER TABLE `v2_notice`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_order`
--
ALTER TABLE `v2_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_payment`
--
ALTER TABLE `v2_payment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_plan`
--
ALTER TABLE `v2_plan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_server_group`
--
ALTER TABLE `v2_server_group`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_server_log`
--
ALTER TABLE `v2_server_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_at` (`log_at`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `server_id` (`server_id`);

--
-- Chỉ mục cho bảng `v2_server_shadowsocks`
--
ALTER TABLE `v2_server_shadowsocks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_server_trojan`
--
ALTER TABLE `v2_server_trojan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_server_v2ray`
--
ALTER TABLE `v2_server_v2ray`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_stat_order`
--
ALTER TABLE `v2_stat_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `record_at` (`record_at`);

--
-- Chỉ mục cho bảng `v2_stat_server`
--
ALTER TABLE `v2_stat_server`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `server_id_server_type_record_at` (`server_id`,`server_type`,`record_at`),
  ADD KEY `record_at` (`record_at`),
  ADD KEY `server_id` (`server_id`);

--
-- Chỉ mục cho bảng `v2_ticket`
--
ALTER TABLE `v2_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_ticket_message`
--
ALTER TABLE `v2_ticket_message`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `v2_user`
--
ALTER TABLE `v2_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_commission_log`
--
ALTER TABLE `v2_commission_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_coupon`
--
ALTER TABLE `v2_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_invite_code`
--
ALTER TABLE `v2_invite_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_knowledge`
--
ALTER TABLE `v2_knowledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_mail_log`
--
ALTER TABLE `v2_mail_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_notice`
--
ALTER TABLE `v2_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_order`
--
ALTER TABLE `v2_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_payment`
--
ALTER TABLE `v2_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_plan`
--
ALTER TABLE `v2_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_server_group`
--
ALTER TABLE `v2_server_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_server_log`
--
ALTER TABLE `v2_server_log`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_server_shadowsocks`
--
ALTER TABLE `v2_server_shadowsocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_server_trojan`
--
ALTER TABLE `v2_server_trojan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '节点ID';

--
-- AUTO_INCREMENT cho bảng `v2_server_v2ray`
--
ALTER TABLE `v2_server_v2ray`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_stat_order`
--
ALTER TABLE `v2_stat_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_stat_server`
--
ALTER TABLE `v2_stat_server`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_ticket`
--
ALTER TABLE `v2_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_ticket_message`
--
ALTER TABLE `v2_ticket_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `v2_user`
--
ALTER TABLE `v2_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
