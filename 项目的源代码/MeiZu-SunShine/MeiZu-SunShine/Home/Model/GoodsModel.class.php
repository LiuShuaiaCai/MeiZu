<?php
	namespace Home\Model;
	use Think\Model\RelationModel;
	class GoodsModel extends RelationModel
	{
		protected $_link=array(
				'Attr'=>array(
						'mapping_type'=>self::MANY_TO_MANY,
						'foreign_key'=>'gid',
						'relation_foreign_key'=>'aid',
						'relation_table'=>'meizu_guanlian',
						'Internet'=>array(),
					)
			);
	}