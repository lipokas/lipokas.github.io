CREATE TABLE [dbo].[MUCore_Shop_Items](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[name] [nvarchar](50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
	[i_type] [int] NULL,
	[i_id] [int] NULL,
	[credits] [int] NULL,
	[serial] [int] NULL,
	[i_luck_option] [int] NULL,
	[i_skill_option] [int] NULL,
	[size_x] [int] NULL,
	[size_y] [int] NULL,
	[i_default_durability] [int] NULL,
	[i_maximum_durability] [int] NULL,
	[category] [int] NULL,
	[i_max_excelent_option] [int] NULL,
	[i_max_option] [int] NULL,
	[i_max_level] [int] NULL,
	[i_refined_option] [int] NULL,
	[i_harmony_option] [int] NULL,
	[i_socket_option] [int] NULL,
	[i_option] [int] NULL,
	[i_exc_option] [int] NULL,
	[class_requirement] [text] COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
	[ancient_id] [int] NULL,
	[i_stock] [nvarchar](25) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
	[i_image] [nvarchar](50) COLLATE SQL_Latin1_General_CP1_CI_AS NULL,
	[i_sell] [int] NULL,
	[exc_anc] [int] NULL,
	[i_stick_level] [int] NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]