<?php

namespace Modules\KnowledgeBase\Entities;

use Illuminate\Database\Eloquent\Model;

class InfixKnowledgeBase extends Model
{
    protected $table = 'infix_knowledge_base';
    protected $primaryKey = 'id';
    protected $fillable = [];

    public function class()
    {
        return $this->belongsTo('Modules\KnowledgeBase\Entities\InfixKnowledgeBaseCategory\InfixKnowledgeBaseCategory', 'category_id', 'id');
    }
}
