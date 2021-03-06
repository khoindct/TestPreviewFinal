USE [master]
GO
/****** Object:  Database [testpreview]    Script Date: 17-06-2020 22:52:16 ******/
CREATE DATABASE [testpreview]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'testpreview', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL13.MSSQLSERVER\MSSQL\DATA\testpreview.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'testpreview_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL13.MSSQLSERVER\MSSQL\DATA\testpreview_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
GO
ALTER DATABASE [testpreview] SET COMPATIBILITY_LEVEL = 130
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [testpreview].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [testpreview] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [testpreview] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [testpreview] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [testpreview] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [testpreview] SET ARITHABORT OFF 
GO
ALTER DATABASE [testpreview] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [testpreview] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [testpreview] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [testpreview] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [testpreview] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [testpreview] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [testpreview] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [testpreview] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [testpreview] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [testpreview] SET  DISABLE_BROKER 
GO
ALTER DATABASE [testpreview] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [testpreview] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [testpreview] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [testpreview] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [testpreview] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [testpreview] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [testpreview] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [testpreview] SET RECOVERY FULL 
GO
ALTER DATABASE [testpreview] SET  MULTI_USER 
GO
ALTER DATABASE [testpreview] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [testpreview] SET DB_CHAINING OFF 
GO
ALTER DATABASE [testpreview] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [testpreview] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [testpreview] SET DELAYED_DURABILITY = DISABLED 
GO
EXEC sys.sp_db_vardecimal_storage_format N'testpreview', N'ON'
GO
ALTER DATABASE [testpreview] SET QUERY_STORE = OFF
GO
USE [testpreview]
GO
ALTER DATABASE SCOPED CONFIGURATION SET LEGACY_CARDINALITY_ESTIMATION = OFF;
GO
ALTER DATABASE SCOPED CONFIGURATION SET MAXDOP = 0;
GO
ALTER DATABASE SCOPED CONFIGURATION SET PARAMETER_SNIFFING = ON;
GO
ALTER DATABASE SCOPED CONFIGURATION SET QUERY_OPTIMIZER_HOTFIXES = OFF;
GO
USE [testpreview]
GO
/****** Object:  Table [dbo].[failed_jobs]    Script Date: 17-06-2020 22:52:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[failed_jobs](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[connection] [nvarchar](max) NOT NULL,
	[queue] [nvarchar](max) NOT NULL,
	[payload] [nvarchar](max) NOT NULL,
	[exception] [nvarchar](max) NOT NULL,
	[failed_at] [datetime] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[hinhthucyeucau]    Script Date: 17-06-2020 22:52:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[hinhthucyeucau](
	[hinhthuc_id] [int] IDENTITY(1,1) NOT NULL,
	[hinhthuc] [nvarchar](255) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[hinhthuc_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[loaiyeucau]    Script Date: 17-06-2020 22:52:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[loaiyeucau](
	[loaiyeucau_id] [int] IDENTITY(1,1) NOT NULL,
	[tenyeucau] [nvarchar](255) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[loaiyeucau_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[migrations]    Script Date: 17-06-2020 22:52:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[migrations](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[migration] [nvarchar](255) NOT NULL,
	[batch] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[nhanvien]    Script Date: 17-06-2020 22:52:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[nhanvien](
	[nhanvien_id] [bigint] IDENTITY(1,1) NOT NULL,
	[hoten] [nvarchar](255) NOT NULL,
	[gioitinh] [nvarchar](255) NOT NULL,
	[sodienthoai] [nvarchar](255) NOT NULL,
	[email] [nvarchar](255) NOT NULL,
	[password] [nvarchar](255) NOT NULL,
	[phongban_id] [int] NOT NULL,
	[phancap_id] [int] NOT NULL,
	[to] [nvarchar](255) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[nhanvien_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[password_resets]    Script Date: 17-06-2020 22:52:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[password_resets](
	[email] [nvarchar](255) NOT NULL,
	[token] [nvarchar](255) NOT NULL,
	[created_at] [datetime] NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[phancap]    Script Date: 17-06-2020 22:52:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[phancap](
	[phancap_id] [int] IDENTITY(1,1) NOT NULL,
	[chucvu] [nvarchar](255) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[phancap_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[phongban]    Script Date: 17-06-2020 22:52:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[phongban](
	[phongban_id] [int] IDENTITY(1,1) NOT NULL,
	[tenphongban] [nvarchar](255) NOT NULL,
	[chucnang] [nvarchar](max) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[phongban_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[to]    Script Date: 17-06-2020 22:52:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[to](
	[to_id] [int] IDENTITY(1,1) NOT NULL,
	[phongban_id] [int] NOT NULL,
	[to] [nvarchar](255) NOT NULL,
	[nhiemvu] [nvarchar](max) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[to_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[users]    Script Date: 17-06-2020 22:52:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[users](
	[id] [bigint] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](255) NOT NULL,
	[email] [nvarchar](255) NOT NULL,
	[email_verified_at] [datetime] NULL,
	[password] [nvarchar](255) NOT NULL,
	[remember_token] [nvarchar](100) NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[yeucau]    Script Date: 17-06-2020 22:52:17 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[yeucau](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nguoiyeucau] [nvarchar](255) NOT NULL,
	[loaiyeucau_id] [int] NOT NULL,
	[hinhthuc_id] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [nhanvien_email_unique]    Script Date: 17-06-2020 22:52:17 ******/
CREATE UNIQUE NONCLUSTERED INDEX [nhanvien_email_unique] ON [dbo].[nhanvien]
(
	[email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [password_resets_email_index]    Script Date: 17-06-2020 22:52:17 ******/
CREATE NONCLUSTERED INDEX [password_resets_email_index] ON [dbo].[password_resets]
(
	[email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
SET ANSI_PADDING ON
GO
/****** Object:  Index [users_email_unique]    Script Date: 17-06-2020 22:52:17 ******/
CREATE UNIQUE NONCLUSTERED INDEX [users_email_unique] ON [dbo].[users]
(
	[email] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, SORT_IN_TEMPDB = OFF, IGNORE_DUP_KEY = OFF, DROP_EXISTING = OFF, ONLINE = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
GO
ALTER TABLE [dbo].[failed_jobs] ADD  DEFAULT (getdate()) FOR [failed_at]
GO
USE [master]
GO
ALTER DATABASE [testpreview] SET  READ_WRITE 
GO
